<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WhoReportsController extends AbstractController
{
    #[Route('/rapports-d-activite', name: 'app_who_reports')]
    public function index(): Response
    {
        return $this->render('who_reports/index.html.twig', [
            'controller_name' => 'WhoReportsController',
        ]);
    }
}
