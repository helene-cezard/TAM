<?php

namespace App\Controller;

use App\Repository\CarouselImageRepository;
use App\Repository\HomeSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(CarouselImageRepository $carouselImageRepository, HomeSectionRepository $homeSectionRepository): Response
    {
        $carouselImages = $carouselImageRepository->findBy([], ['position' => 'ASC']);
        $homeSections = $homeSectionRepository->findBy([], ['position' => 'ASC']);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'carouselImages' => $carouselImages,
            'homeSections' => $homeSections,
        ]);
    }
}
