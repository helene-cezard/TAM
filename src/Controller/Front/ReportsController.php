<?php

namespace App\Controller\Front;

use App\Repository\ReportsRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReportsController extends AbstractController
{
    #[Route('/rapports', name: 'app_reports')]
    public function index(RubricInfoRepository $rubricInfoRepository, ReportsRepository $reportsRepository): Response
    {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_reports']);
        $reports = $reportsRepository->findBy([], ['position' => 'ASC']);
        return $this->render('front/who_reports/index.html.twig', [
            'controller_name' => 'ReportsController',
            'rubricInfo' => $rubricInfo,
            'reports' => $reports
        ]);
    }
}