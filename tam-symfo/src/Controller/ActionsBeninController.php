<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ActionsBeninController extends AbstractController
{
    #[Route('/actions/benin', name: 'app_actions_benin')]
    public function index(): Response
    {
        return $this->render('actions_benin/index.html.twig', [
            'controller_name' => 'ActionsBeninController',
        ]);
    }
}
