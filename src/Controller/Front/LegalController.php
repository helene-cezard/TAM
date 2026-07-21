<?php

namespace App\Controller\Front;

use App\Repository\RubricInfoRepository;
use App\Repository\Section\LegalSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LegalController extends AbstractController
{
    #[Route('/mentions-legales', name: 'app_legal')]
    public function index(LegalSectionRepository $legalSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $legalSections = $legalSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'legal']);
        return $this->render('front/legal/index.html.twig', [
            'controller_name' => 'AssociationController',
            'legalSections' => $legalSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
