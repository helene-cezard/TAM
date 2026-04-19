<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WhoTeamController extends AbstractController
{
    #[Route('/equipe', name: 'app_who_team')]
    public function index(): Response
    {
        return $this->render('who_team/index.html.twig', [
            'controller_name' => 'WhoTeamController',
        ]);
    }
}
