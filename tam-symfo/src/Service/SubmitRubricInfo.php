<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Service\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitRubricInfo
{

    public function __construct(
        private EntityManagerInterface $entityManager,
        private ImageUploader $imageUploader
        )
    {
        $this->entityManager = $entityManager;
        $this->imageUploader = $imageUploader;
    }

    public function handleRubricForm(
        FormInterface $rubricInfoForm,
        Request $request,
        $rubricInfo
        ): bool
    {
        $rubricInfoForm->handleRequest($request);

        if ($rubricInfoForm->isSubmitted() && $rubricInfoForm->isValid()) {
            $image = $rubricInfoForm->get('uploadedImage')->getData();

            if($image) {

                $newFilename = $this->imageUploader->upload($image);

                $galleryImage = new GalleryImage();
                $galleryImage->setPath('/images/uploadedImages/' . $newFilename);
                // $galleryImage->setAlt($rubricInfoForm->get('alt')->getData());
                $galleryImage->setAlt('Image de la rubrique');
                $galleryImage->setAppears(false);

                // Associer la nouvelle image à RubricInfo
                $rubricInfo->setGalleryImage($galleryImage);
                $this->entityManager->persist($galleryImage);
            }

            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}