<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ResearchController extends AbstractController
{
    #[Route('/recherche', name: 'app_research')]
    public function index(): Response
    {
        return $this->render('front/research/index.html.twig', [
            'controller_name' => 'ResearchController',
        ]);
    }
}
