<?php

namespace App\Controller\Front;

use App\Repository\RubricInfoRepository;
use App\Repository\TrainingSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TrainingController extends AbstractController
{
    #[Route('/formation', name: 'app_training')]
    public function index(TrainingSectionRepository $trainingSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $trainingSections = $trainingSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'training']);
        return $this->render('front/training/index.html.twig', [
            'controller_name' => 'TrainingController',
            'trainingSections' => $trainingSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
