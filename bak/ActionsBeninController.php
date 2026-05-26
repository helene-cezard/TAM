<?php

namespace App\Controller;

use App\Repository\BeninSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ActionsBeninController extends AbstractController
{
    #[Route('/actions/benin', name: 'app_actions_benin')]
    public function index(BeninSectionRepository $beninSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $beninSections = $beninSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_benin']);
         return $this->render('actions_benin/index.html.twig', [
            'controller_name' => 'ActionsBeninController',
            'beninSections' => $beninSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
