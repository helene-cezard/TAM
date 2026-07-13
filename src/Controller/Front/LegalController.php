<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LegalController extends AbstractController
{
    #[Route('/mentions-legales', name: 'app_legal')]
    public function index(): Response
    {
        return $this->render('front/legal/index.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }
}
