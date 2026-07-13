<?php

namespace App\Controller\Front;

use App\Repository\CarouselImageRepository;
use App\Repository\Section\HomeSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CarouselImageRepository $carouselImageRepository, HomeSectionRepository $homeSectionRepository): Response
    {
        $carouselImages = $carouselImageRepository->findBy([], ['position' => 'ASC']);
        $homeSections = $homeSectionRepository->findBy([], ['position' => 'ASC']);

        return $this->render('front/home/index.html.twig', [
            'controller_name' => 'HomeController',
            'carouselImages' => $carouselImages,
            'homeSections' => $homeSections,
        ]);
    }
}
