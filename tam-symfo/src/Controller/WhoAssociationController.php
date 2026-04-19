<?php

namespace App\Controller;

use App\Repository\AssocSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WhoAssociationController extends AbstractController
{
    #[Route('/association', name: 'app_who_association')]
    public function index(AssocSectionRepository $assoSectionRepository): Response
    {
        $sections = $assoSectionRepository->findAll();
        return $this->render('who_association/index.html.twig', [
            'controller_name' => 'WhoAssociationController',
            'sections' => $sections,
        ]);
    }
}
