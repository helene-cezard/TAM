<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ActionsFranceController extends AbstractController
{
    #[Route('/actions/france', name: 'app_actions_france')]
    public function index(): Response
    {
        return $this->render('actions_france/index.html.twig', [
            'controller_name' => 'ActionsFranceController',
        ]);
    }
}
