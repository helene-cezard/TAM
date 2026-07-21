<?php
namespace App\Service;

use App\Entity\GalleryImage;
use App\Repository\GalleryImageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitCarouselImage
{

    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private GalleryImageRepository $galleryImageRepository,
        private ImageResizer $imageResizer,

        #[Autowire('%uploaded_images_directory%')]
        private string $imagesDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->galleryImageRepository = $galleryImageRepository;
        $this->imagesDirectory = $imagesDirectory;
        $this->imageResizer = $imageResizer;
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
                $galleryImage->setAlt($carouselForm->get('alt')->getData());

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