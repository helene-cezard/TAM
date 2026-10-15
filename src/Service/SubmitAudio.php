<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitAudio
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,

        #[Autowire('%uploaded_audio_directory%')]
        private string $audioDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->audioDirectory = $audioDirectory;
    }

    public function handleAudioForm(
        FormInterface $audioForm,
        Request $request
        ): bool
    {
        $audioForm->handleRequest($request);

        if ($audioForm->isSubmitted() && $audioForm->isValid()) {
            $audioFile = $audioForm->get('uploadedAudio')->getData();

            $newFilename = $this->fileUploader->upload(
                $audioFile,
                $this->audioDirectory
            );

            $audio = $audioForm->getData();
            $audio->setPath('/audio/' . $newFilename);

            $this->entityManager->persist($audio);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}