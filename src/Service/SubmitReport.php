<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Process\Process;

class SubmitReport
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private DeleteFromServer $deleteFromServer,

        #[Autowire('%uploaded_reports_directory%')]
        private string $reportsDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->reportsDirectory = $reportsDirectory;
        $this->deleteFromServer = $deleteFromServer;
    }

    public function handle(
        FormInterface $reportsForm,
        Request $request,
        $repository
        ): bool
    {
        // L'ancien fichier existe s'il s'agit d'une mise à jour
        $oldFilePath = $reportsForm->getData()?->getPath();
        $oldImagePath = $reportsForm->getData()?->getImage();
        $reportsForm->handleRequest($request);

        if ($reportsForm->isSubmitted() && $reportsForm->isValid()) {
            $reportFile = $reportsForm->get('uploadedReport')->getData();

            // Supprimer l'ancien fichier si un nouveau fichier est téléchargé
            if ($oldFilePath && $reportFile) {
                $this->deleteFromServer->delete($oldFilePath);
            }
            if ($oldImagePath && $reportFile) {
                $this->deleteFromServer->delete($oldImagePath);
            }

            $report = $reportsForm->getData();

            // Si un nouveau fichier est téléchargé, le traiter
            if ($reportFile) {
                $newFilename = $this->fileUploader->upload(
                    $reportFile,
                    $this->reportsDirectory
                );

                $pdfPath = $this->reportsDirectory.'/'.$newFilename;

                $thumbnailFilename = str_replace(
                    '.pdf',
                    '-thumbnail',
                    $newFilename
                );

                $thumbnailBasePath = $this->reportsDirectory.'/'.$thumbnailFilename;

                $process = new Process([
                    'pdftoppm',
                    '-jpeg',
                    '-f', '1',
                    '-singlefile',
                    $pdfPath,
                    $thumbnailBasePath,
                ]);

                $process->mustRun();
                $report->setPosition(count($repository->findAll()) + 1); // Positionner le nouveau rapport à la fin
                $report->setPath('/reports/' . $newFilename);
                $report->setImage('/reports/' . $thumbnailFilename . '.jpg');
            }

            $this->entityManager->persist($report);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}