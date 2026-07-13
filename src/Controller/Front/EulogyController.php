<?php

namespace App\Controller\Front;

use App\Repository\Section\EulogySectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EulogyController extends AbstractController
{
    #[Route('/hommage', name: 'app_eulogy')]
    public function index(EulogySectionRepository  $eulogySectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $eulogySections = $eulogySectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'eulogy']);
         return $this->render('front/eulogy/index.html.twig', [
            'controller_name' => 'EulogyController',
            'eulogySections' => $eulogySections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
