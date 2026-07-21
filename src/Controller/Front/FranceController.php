<?php

namespace App\Controller\Front;

// use App\Entity\Section\FranceSection;
use App\Repository\Section\ActionRepository;
use App\Repository\Section\FranceSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FranceController extends AbstractController
{
    #[Route('/france', name: 'app_france')]
    public function index(
        FranceSectionRepository $franceSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        ActionRepository $actionRepository
        ): Response
    {
        $franceSections = $franceSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'france']);
        $actions = $actionRepository->findBy([], ['position' => 'ASC']);

        return $this->render('front/actions_france/index.html.twig', [
            'controller_name' => 'FranceController',
            'franceSections' => $franceSections,
            'rubricInfo' => $rubricInfo,
            'actions' => $actions,
        ]);
    }
}
