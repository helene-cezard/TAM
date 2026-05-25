<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SupportController extends AbstractController
{
    #[Route('/soutenir', name: 'app_support')]
    public function index(): Response
    {
        return $this->render('front/support/index.html.twig', [
            'controller_name' => 'SupportController',
        ]);
    }
}
