<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Process\Process;

class SubmitVisual
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private DeleteFromServer $deleteFromServer,

        #[Autowire('%uploaded_visuals_directory%')]
        private string $visualsDirectory,
    ) {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->visualsDirectory = $visualsDirectory;
        $this->deleteFromServer = $deleteFromServer;
    }

    public function handleVisualForm(
        FormInterface $visualForm,
        Request $request,
        $repository
    ): bool
    {
        // L'ancien fichier existe s'il s'agit d'une mise à jour
        $oldFilePath = $visualForm->getData()?->getPath();
        $oldImagePath = $visualForm->getData()?->getImage();
        $visualForm->handleRequest($request);

        if ($visualForm->isSubmitted() && $visualForm->isValid()) {
            $visualFile = $visualForm->get('uploadedVisual')->getData();

            // Supprimer l'ancien fichier si un nouveau fichier est téléchargé
            if ($oldFilePath && $visualFile) {
                $this->deleteFromServer->delete($oldFilePath);
            }
            if ($oldImagePath && $visualFile) {
                $this->deleteFromServer->delete($oldImagePath);
            }

            $visual = $visualForm->getData();

            if ($visualFile) {
                $mimeType = $visualFile->getMimeType();

                $newFilename = $this->fileUploader->upload(
                    $visualFile,
                    $this->visualsDirectory
                );

                $visual->setPosition(count($repository->findAll()) + 1); // Positionner le nouveau visuel à la fin
                $visual->setImage('/visuals/' . $newFilename);

                if ($mimeType === 'application/pdf') {

                    $pdfPath = $this->visualsDirectory.'/'.$newFilename;

                    $thumbnailFilename = str_replace(
                        '.pdf',
                        '-thumbnail',
                        $newFilename
                    );

                    $thumbnailBasePath = $this->visualsDirectory.'/'.$thumbnailFilename;

                    $process = new Process([
                        'pdftoppm',
                        '-jpeg',
                        '-f', '1',
                        '-singlefile',
                        $pdfPath,
                        $thumbnailBasePath,
                    ]);

                    $process->mustRun();
                    $visual->setPath('/visuals/' . $newFilename);
                    $visual->setImage('/visuals/' . $thumbnailFilename . '.jpg');
                }
            }

            $this->entityManager->persist($visual);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }

}