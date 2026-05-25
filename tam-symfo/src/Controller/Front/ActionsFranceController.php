<?php

namespace App\Controller\Front;

use App\Entity\FranceSection;
use App\Repository\ActionRepository;
use App\Repository\FranceSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ActionsFranceController extends AbstractController
{
    #[Route('/actions/france', name: 'app_actions_france')]
    public function index(
        FranceSectionRepository $franceSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        ActionRepository $actionRepository
        ): Response
    {
        $franceSections = $franceSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_france']);
        $actions = $actionRepository->findBy([], ['position' => 'ASC']);

        return $this->render('front/actions_france/index.html.twig', [
            'controller_name' => 'ActionsFranceController',
            'franceSections' => $franceSections,
            'rubricInfo' => $rubricInfo,
            'actions' => $actions,
        ]);
    }
}
