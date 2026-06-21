<?php

namespace App\Service;

use App\Entity\Reports;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitReport
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ReportUploader  $reportUploader
        )
    {
        $this->entityManager = $entityManager;
        $this->reportUploader = $reportUploader;
    }

    public function handle(
        FormInterface $reportsForm,
        Request $request,
        $repository
        ): bool
    {
        $reportsForm->handleRequest($request);

        if ($reportsForm->isSubmitted() && $reportsForm->isValid()) {
            $reportFile = $reportsForm->get('uploadedReport')->getData();

            $result = $this->reportUploader->upload($reportFile);

            $report = new Reports;
            $report->setPosition(count($repository->findAll()) + 1); // Positionner le nouveau rapport à la fin
            $report->setPath('/reports/' . $result['pdf']);
            $report->setImage('/reports/' . $result['thumbnail']);
            $report->setDescription($reportsForm->get('description')->getData());



            $this->entityManager->persist($report);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}