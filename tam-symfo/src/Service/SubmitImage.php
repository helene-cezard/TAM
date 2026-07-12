<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitImage
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,

        #[Autowire('%uploaded_images_directory%')]
        private string $imagesDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->imagesDirectory = $imagesDirectory;
    }

    public function handleImageForm(
        FormInterface $imageForm,
        Request $request
        ): bool
    {
        $imageForm->handleRequest($request);

        if ($imageForm->isSubmitted() && $imageForm->isValid()) {
            $image = $imageForm->get('uploadedImage')->getData();

            $newFilename = $this->fileUploader->upload(
                $image,
                $this->imagesDirectory
            );

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