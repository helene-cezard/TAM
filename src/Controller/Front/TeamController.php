<?php

namespace App\Controller\Front;

use App\Repository\RoleRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\TeamRepository;
use App\Repository\Section\TeamSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamController extends AbstractController
{
    #[Route('/equipe', name: 'app_team')]
    public function index(
        TeamSectionRepository $teamSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        RoleRepository $roleRepository
        ): Response
    {
        $teamSections = $teamSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_team']);
        $roles = $roleRepository->findBy([], ['position' => 'ASC']);
        return $this->render('front/who_team/index.html.twig', [
            'controller_name' => 'TeamController',
            'teamSections' => $teamSections,
            'rubricInfo' => $rubricInfo,
            'roles' => $roles,
        ]);
    }
}
