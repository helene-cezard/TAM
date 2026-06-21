<?php

namespace App\Controller\Front;

use App\Repository\Section\AssociationSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AssociationController extends AbstractController
{
    #[Route('/association', name: 'app_who_association')]
    public function index(AssociationSectionRepository $associationSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $associationSections = $associationSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_association']);
        return $this->render('front/who_association/index.html.twig', [
            'controller_name' => 'AssociationController',
            'associationSections' => $associationSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
