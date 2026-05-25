<?php

namespace App\Controller\Front;

use App\Repository\ReportsRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WhoReportsController extends AbstractController
{
    #[Route('/rapports-d-activite', name: 'app_who_reports')]
    public function index(RubricInfoRepository $rubricInfoRepository, ReportsRepository $reportsRepository): Response
    {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_reports']);
        $reports = $reportsRepository->findBy([], ['position' => 'ASC']);
        return $this->render('front/who_reports/index.html.twig', [
            'controller_name' => 'WhoReportsController',
            'rubricInfo' => $rubricInfo,
            'reports' => $reports
        ]);
    }
}

// convert RA_AssociationTAM2020.pdf[0] RA_AssociationTAM2020-thumbnail.jpg