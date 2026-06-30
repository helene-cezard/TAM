<?php

namespace App\Controller\Back;

use App\Entity\Reports;
use App\Entity\Section\ReportsSection;
use App\Form\ReportsType;
use App\Form\SectionForms\ReportsSectionType;
use App\Form\RubricInfoType;
use App\Repository\GalleryImageRepository;
use App\Repository\ReportsRepository;
use App\Repository\Section\ReportsSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Service\ReportUploader;
use App\Service\SubmitReport;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackReportsController extends AbstractController
{
    #[Route('/admin/rapports', name: 'admin_reports')]
    public function index(
        ReportsSectionRepository $reportsSectionRepository,
        ReportsRepository $reportsRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo,
        SubmitReport $submitReport
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_reports']);
        $galleryImages = $galleryImageRepository->findAll();
        $reportsSections = $reportsSectionRepository->findBy([], ['position' => 'ASC']);
        $reports = $reportsRepository->findBy([], ['position' => 'ASC']);

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirectToRoute('admin_reports');
        }

        // Gestion du formulaire d'ajout de rapport
        $reportsForm = $this->createForm(ReportsType::class);
        $reportIsSubmited = $submitReport->handle($reportsForm, $request, $reportsRepository);
        if ($reportIsSubmited) {
            $this->addFlash('success', 'Rapport ajouté avec succès !');
            return $this->redirectToRoute('admin_reports');
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(ReportsSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $reportsSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirectToRoute('admin_reports');
        }

        return $this->render('back/reports/index.html.twig', [
            'sections' => $reportsSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'reportsForm' => $reportsForm,
            'galleryImages' => $galleryImages,
            'reports' => $reports
        ]);
    }

    #[Route('/admin/reports/section_reorder', name: 'admin_reports_sections_reorder', methods: ['POST'])]
    public function reorderSections(
        Request $request,
        ReportsSectionRepository $repository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $section = $repository->find($id);

            if ($section) {
                $section->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_reports')
        ]);
    }

    #[Route('/admin/reports/reports_reorder', name: 'admin_reports_reorder', methods: ['POST'])]
    public function reorderReports(
        Request $request,
        ReportsRepository $repository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {


            $report = $repository->find($id);

            if ($report) {
                $report->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des rapports enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_reports')
        ]);
    }

    #[Route('/admin/reports/section_delete/{id}', name: 'admin_reports_section_delete')]
    public function deleteSection(
        ReportsSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $reportsSection = $repository->find($id);

        if (!$reportsSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($reportsSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirectToRoute('admin_reports');
    }

    #[Route('/admin/reports/report_delete/{id}', name: 'admin_report_delete')]
    public function deleteReports(
        ReportsRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $report = $repository->find($id);

        if (!$report) {
            throw $this->createNotFoundException('Rapport non trouvée');
        }

        $entityManager->remove($report);
        $entityManager->flush();

        $this->addFlash('success', 'Rapport supprimé avec succès !');

        return $this->redirectToRoute('admin_reports');
    }

    #[Route('/admin/reports/section_update/{id}', name: 'admin_reports_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        ReportsSection $reportsSection
    )
    {
        $sectionForm = $this->createForm(ReportsSectionType::class, $reportsSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirectToRoute('admin_reports');
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }

    #[Route('/admin/reports/report_update/{id}', name: 'admin_reports_update')]
    public function updateReport(
        Request $request,
        ReportsRepository $reportsRepository,
        EntityManagerInterface $entityManager,
        Reports $report,
        ReportUploader  $reportUploader
    )
    {
        $reportsForm = $this->createForm(ReportsType::class, $report);
        $reportsForm->handleRequest($request);

        if ($reportsForm->isSubmitted() && $reportsForm->isValid()) {
            $reportFile = $reportsForm->get('uploadedReport')->getData();

            if ($reportFile !== null) {
                $result = $reportUploader->upload($reportFile);
                $report->setPath('/reports/' . $result['pdf']);
                $report->setImage('/reports/' . $result['thumbnail']);
            }

            $report->setDescription($reportsForm->get('description')->getData());

            $entityManager->persist($report);
            $entityManager->flush();

            $this->addFlash('success', 'Le rapport a bien été mise à jour.');

            return $this->redirectToRoute('admin_reports');
        }

        return $this->render('back/reports/form.html.twig', [
            'reportForm' => $reportsForm,
            'report' => $report,
        ]);
    }
}