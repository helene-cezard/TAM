<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitReport
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private DeleteFromServer $deleteFromServer,

        #[Autowire('%uploaded_reports_directory%')]
        private string $reportsDirectory,
    ) {
    }

    public function handle(
        FormInterface $reportsForm,
        Request $request,
        $repository
    ): bool {
        // Anciennes ressources (édition)
        $oldFilePath = $reportsForm->getData()?->getPath();
        $oldImagePath = $reportsForm->getData()?->getImage();

        $reportsForm->handleRequest($request);

        if (!$reportsForm->isSubmitted() || !$reportsForm->isValid()) {
            return false;
        }

        $report = $reportsForm->getData();
        $reportFile = $reportsForm->get('uploadedReport')->getData();

        // Aucun PDF fourni et aucun PDF existant
        if (!$reportFile && $report->getPath() === null) {
            return false;
        }

        if ($reportFile) {

            // Suppression des anciens fichiers
            if ($oldFilePath) {
                $this->deleteFromServer->delete($oldFilePath);
            }

            if ($oldImagePath) {
                $this->deleteFromServer->delete($oldImagePath);
            }

            // Upload du PDF
            $newFilename = $this->fileUploader->upload(
                $reportFile,
                $this->reportsDirectory
            );

            $pdfPath = $this->reportsDirectory . '/' . $newFilename;

            // Nom de la miniature
            $thumbnailFilename = pathinfo(
                $newFilename,
                PATHINFO_FILENAME
            ) . '-thumbnail.jpg';

            $thumbnailPath = $this->reportsDirectory . '/' . $thumbnailFilename;

            // Génération de la miniature avec Imagick
            $imagick = new \Imagick();

            // Résolution avant lecture du PDF
            $imagick->setResolution(150, 150);

            // Première page uniquement
            $imagick->readImage($pdfPath . '[0]');

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

            // Si c'est un nouveau rapport
            if ($report->getId() === null) {
                $report->setPosition(count($repository->findAll()) + 1);
            }

            $report->setPath('/reports/' . $newFilename);
            $report->setImage('/reports/' . $thumbnailFilename);
        }

        $this->entityManager->persist($report);
        $this->entityManager->flush();

        return true;
    }
}