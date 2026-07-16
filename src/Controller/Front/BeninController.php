<?php

namespace App\Controller\Front;

use App\Repository\Section\BeninSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BeninController extends AbstractController
{
    #[Route('/benin', name: 'app_benin')]
    public function index(BeninSectionRepository $beninSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $beninSections = $beninSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_benin']);
         return $this->render('front/actions_benin/index.html.twig', [
            'controller_name' => 'BeninController',
            'beninSections' => $beninSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
