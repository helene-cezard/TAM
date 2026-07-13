<?php

namespace App\Controller\Front;

use App\Repository\GalleryImageRepository;
use App\Repository\ImageCategoryRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\VideoRepository;
use App\Repository\VisualRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ResourcesController extends AbstractController
{
    #[Route('/ressources', name: 'app_resources')]
    public function index(
        GalleryImageRepository $galleryImageRepository,
        RubricInfoRepository $rubricInfoRepository,
        ImageCategoryRepository $imageCategoryRepository,
        VideoRepository $videoRepository,
        VisualRepository $visualRepository
        ): Response
    {
        $categories = $imageCategoryRepository->findAll();
        $galleryImages = $galleryImageRepository->findAll();
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'resources']);
        $videos = $videoRepository->findAll();
        $visuals = $visualRepository->findAll();

        return $this->render('front/resources/index.html.twig', [
            'controller_name' => 'ResourcesController',
            'galleryImages' => $galleryImages,
            'rubricInfo' => $rubricInfo,
            'categories' => $categories,
            'videos' => $videos,
            'visuals' => $visuals
        ]);
    }
}
