<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitRubricInfo
{

    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private ImageResizer $imageResizer,

        #[Autowire('%uploaded_images_directory%')]
        private string $imagesDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->imagesDirectory = $imagesDirectory;
        $this->imageResizer = $imageResizer;
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

                $newFilename = $this->fileUploader->upload(
                    $image,
                    $this->imagesDirectory
                );

                $this->imageResizer->resize(
                    $this->imagesDirectory.'/'.$newFilename,
                    1600
                );

                $galleryImage = new GalleryImage();
                $galleryImage->setPath('/images/uploadedImages/' . $newFilename);
                $galleryImage->setAlt($rubricInfoForm->get('alt')->getData());

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