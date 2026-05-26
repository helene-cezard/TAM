<?php

namespace App\Controller;

use App\Repository\RubricInfoRepository;
use App\Repository\TeamRepository;
use App\Repository\TeamSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WhoTeamController extends AbstractController
{
    #[Route('/equipe', name: 'app_who_team')]
    public function index(
        TeamSectionRepository $teamSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        TeamRepository $teamRepository
        ): Response
    {
        $teamSections = $teamSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_team']);
        $teamMembers = $teamRepository->findAll();
        return $this->render('who_team/index.html.twig', [
            'controller_name' => 'WhoTeamController',
            'teamSections' => $teamSections,
            'rubricInfo' => $rubricInfo,
            'teamMembers' => $teamMembers
        ]);
    }
}
