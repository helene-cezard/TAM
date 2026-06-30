<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Repository\GalleryImageRepository;
use App\Service\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitCarouselImage
{

    public function __construct(
        private EntityManagerInterface $entityManager,
        private ImageUploader $imageUploader,
        private GalleryImageRepository $galleryImageRepository
        )
    {
        $this->entityManager = $entityManager;
        $this->imageUploader = $imageUploader;
        $this->galleryImageRepository = $galleryImageRepository;
    }

    public function handleCarouselForm(
        FormInterface $carouselForm,
        Request $request,
        $carouselImage
        ): bool
    {
        $carouselForm->handleRequest($request);

        if ($carouselForm->isSubmitted() && $carouselForm->isValid()) {
            $image = $carouselForm->get('uploadedImage')->getData();

            if($image) {

                $newFilename = $this->imageUploader->upload($image);

                $galleryImage = new GalleryImage();
                $galleryImage->setPath('/images/uploadedImages/' . $newFilename);
                $galleryImage->setAlt($carouselForm->get('alt')->getData());
                // $galleryImage->setAlt('Image de la rubrique');

                // Associer la nouvelle image à RubricInfo
                $carouselImage->setGalleryImage($galleryImage);
            }
            else {
                $imageId = $carouselForm->get('galleryImage')->getData();
                $galleryImage = $this->galleryImageRepository->find($imageId);
                $carouselImage->setGalleryImage($galleryImage);
            }

            $this->entityManager->persist($galleryImage);
            $carouselImage->setPosition(count($this->galleryImageRepository->findAll()) + 1);
            $this->entityManager->persist($carouselImage);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}