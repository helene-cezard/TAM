<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Entity\Video;
use App\Service\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitVideo
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private VideoUploader $videoUploader
        )
    {
        $this->entityManager = $entityManager;
        $this->videoUploader = $videoUploader;
    }

    public function handleVideoForm(
        FormInterface $videoForm,
        Request $request
        ): bool
    {
        $videoForm->handleRequest($request);

        if ($videoForm->isSubmitted() && $videoForm->isValid()) {
            $videoUrl = $videoForm->get('path')->getData();
            $video = new Video;

            if (!$videoUrl) {
                $video = $videoForm->get('uploadedVideo')->getData();
                $newFilename = $this->videoUploader->upload($video);
                $video->setPath('videos/' . $newFilename);
                $video->setType('local');
            }
            else {
                $video->setPath($videoUrl);
                $video->setType('youtube');
            }

            $this->entityManager->persist($video);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}