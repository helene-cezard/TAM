<?php

namespace App\Controller\Front;

use App\Repository\GalleryImageRepository;
use App\Repository\ImageCategoryRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ResourcesController extends AbstractController
{
    #[Route('/ressources', name: 'app_resources')]
    public function index(GalleryImageRepository $galleryImageRepository, RubricInfoRepository $rubricInfoRepository, ImageCategoryRepository $imageCategoryRepository): Response
    {
        $categories = $imageCategoryRepository->findAll();
        $galleryImages = $galleryImageRepository->findAll();
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'resources']);
        return $this->render('front/resources/index.html.twig', [
            'controller_name' => 'ResourcesController',
            'galleryImages' => $galleryImages,
            'rubricInfo' => $rubricInfo,
            'categories' => $categories,
        ]);
    }
}
