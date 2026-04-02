<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EulogyController extends AbstractController
{
    #[Route('/hommage', name: 'app_eulogy')]
    public function index(): Response
    {
        return $this->render('eulogy/index.html.twig', [
            'controller_name' => 'EulogyController',
        ]);
    }
}
