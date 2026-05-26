<?php

namespace App\Controller;

use App\Repository\AssociationSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WhoAssociationController extends AbstractController
{
    #[Route('/association', name: 'app_who_association')]
    public function index(AssociationSectionRepository $associationSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $associationSections = $associationSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_association']);
        return $this->render('who_association/index.html.twig', [
            'controller_name' => 'WhoAssociationController',
            'associationSections' => $associationSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
