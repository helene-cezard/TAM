<?php

namespace App\Controller\Front;

use App\Repository\AudioRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\ImageCategoryRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\Section\ResourcesSectionRepository;
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
        VisualRepository $visualRepository,
        ResourcesSectionRepository $resourcesSectionRepository,
        AudioRepository $audioRepository
        ): Response
    {
        $categories = $imageCategoryRepository->findAll();
        $galleryImages = $galleryImageRepository->findAll();
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'resources']);
        $videos = $videoRepository->findBy([], ['position' => 'ASC']);
        $visuals = $visualRepository->findAll();
        $resourcesSections = $resourcesSectionRepository->findBy([], ['position' => 'ASC']);
        $audios = $audioRepository->findAll();

        return $this->render('front/resources/index.html.twig', [
            'controller_name' => 'ResourcesController',
            'galleryImages' => $galleryImages,
            'rubricInfo' => $rubricInfo,
            'categories' => $categories,
            'videos' => $videos,
            'visuals' => $visuals,
            'resourcesSections' => $resourcesSections,
            'audios' => $audios
        ]);
    }
}
