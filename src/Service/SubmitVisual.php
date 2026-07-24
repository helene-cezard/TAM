<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitVisual
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private DeleteFromServer $deleteFromServer,

        #[Autowire('%uploaded_visuals_directory%')]
        private string $visualsDirectory,
    ) {
    }

    public function handleVisualForm(
        FormInterface $visualForm,
        Request $request,
        $repository
    ): bool
    {
        $oldFilePath = $visualForm->getData()?->getPath();
        $oldImagePath = $visualForm->getData()?->getImage();

        $visualForm->handleRequest($request);

        if (!$visualForm->isSubmitted() || !$visualForm->isValid()) {
            return false;
        }

        $visual = $visualForm->getData();
        $visualFile = $visualForm->get('uploadedVisual')->getData();

        if ($visualFile) {

            if ($oldFilePath) {
                $this->deleteFromServer->delete($oldFilePath);
            }

            if ($oldImagePath) {
                $this->deleteFromServer->delete($oldImagePath);
            }

            $mimeType = $visualFile->getMimeType();

            $newFilename = $this->fileUploader->upload(
                $visualFile,
                $this->visualsDirectory
            );

            $visual->setPosition(count($repository->findAll()) + 1);

            if ($mimeType === 'application/pdf') {

                $pdfPath = $this->visualsDirectory.'/'.$newFilename;

                $thumbnailFilename = pathinfo(
                    $newFilename,
                    PATHINFO_FILENAME
                ).'-thumbnail.jpg';

                $thumbnailPath = $this->visualsDirectory.'/'.$thumbnailFilename;

                $imagick = new \Imagick();

                // Résolution avant lecture du PDF
                $imagick->setResolution(150, 150);

                // Première page uniquement
                $imagick->readImage($pdfPath.'[0]');

                // Fond blanc
                $imagick->setImageBackgroundColor('white');
                $imagick = $imagick->mergeImageLayers(
                    \Imagick::LAYERMETHOD_FLATTEN
                );

                // Format JPEG
                $imagick->setImageFormat('jpeg');

                // Taille de la miniature
                $imagick->thumbnailImage(600, 0);

                $imagick->writeImage($thumbnailPath);

                $imagick->clear();
                $imagick->destroy();

                $visual->setPath('/visuals/'.$newFilename);
                $visual->setImage('/visuals/'.$thumbnailFilename);

            } else {

                $visual->setPath('/visuals/'.$newFilename);
                $visual->setImage('/visuals/'.$newFilename);

            }
        }

        $this->entityManager->persist($visual);
        $this->entityManager->flush();

        return true;
    }
}