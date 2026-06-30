<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Service\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitImage
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ImageUploader $imageUploader
        )
    {
        $this->entityManager = $entityManager;
        $this->imageUploader = $imageUploader;
    }

    public function handleImageForm(
        FormInterface $imageForm,
        Request $request
        ): bool
    {
        $imageForm->handleRequest($request);

        if ($imageForm->isSubmitted() && $imageForm->isValid()) {
            $image = $imageForm->get('uploadedImage')->getData();

            $newFilename = $this->imageUploader->upload($image);

            $galleryImage = new GalleryImage();
            $galleryImage->setPath('/images/uploadedImages/' . $newFilename);
            $galleryImage->setAlt($imageForm->get('alt')->getData());

            $category = $imageForm->get('category')->getData();
            $galleryImage->setCategory($category);

            $this->entityManager->persist($galleryImage);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}