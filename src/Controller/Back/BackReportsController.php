<?php

namespace App\Controller\Back;

use App\Entity\Reports;
use App\Entity\RubricInfo;
use App\Entity\Section\ReportsSection;
use App\Form\ReportsType;
use App\Form\SectionForms\ReportsSectionType;
use App\Form\RubricInfoType;
use App\Repository\GalleryImageRepository;
use App\Repository\ReportsRepository;
use App\Repository\Section\ReportsSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Service\DeleteFromServer;
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
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'reports']);
        $galleryImages = $galleryImageRepository->findAll();
        $reportsSections = $reportsSectionRepository->findBy([], ['position' => 'ASC']);
        $reports = $reportsRepository->findBy([], ['position' => 'ASC']);

        $rubrics = $rubricInfoRepository->findAll();
        $rubricGalleryIds = array_map(
            fn(RubricInfo $rubric) => $rubric->getGalleryImage()?->getId(),
            $rubrics
        );

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'En-tête de rubrique mis à jour avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_reports') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout de rapport
        $reportsForm = $this->createForm(ReportsType::class);
        $reportIsSubmited = $submitReport->handle($reportsForm, $request, $reportsRepository);
        if ($reportIsSubmited) {
            $this->addFlash('success', 'Rapport ajouté avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_reports') . '#reports-anchor'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(ReportsSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $reportsSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_reports') . '#reportsSections'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $reportsForm->isSubmitted() && !$reportsForm->isValid() => 'reports',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/reports/index.html.twig', [
            'sections' => $reportsSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'reportsForm' => $reportsForm,
            'galleryImages' => $galleryImages,
            'reports' => $reports,
            'rubricGalleryIds' => $rubricGalleryIds,
            'scrollTo' => $scrollTo,
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

        return new JsonResponse([
            'success' => 'Ordre des sections enregistré avec succès !',
            'redirect' => $this->generateUrl('admin_reports') . '#reportsSections'
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

        return new JsonResponse([
            'success' => 'Ordre des rapports enregistré avec succès !',
            'redirect' => $this->generateUrl('admin_reports') . '#reports-anchor'
        ]);
    }

    #[Route('/admin/reports/section_delete/{id}', name: 'admin_reports_section_delete', methods: ['POST'])]
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

        return $this->redirect(
            $this->generateUrl('admin_reports') . '#reportsSections'
        );
    }

    #[Route('/admin/reports/report_delete/{id}', name: 'admin_reports_delete', methods: ['POST'])]
    public function deleteReports(
        ReportsRepository $repository,
        EntityManagerInterface $entityManager,
        DeleteFromServer $deleteFromServer,
        int $id
    ): Response {
        $report = $repository->find($id);

        if (!$report) {
            throw $this->createNotFoundException('Rapport non trouvée');
        }

        $deleteFromServer->delete($report->getPath(), $report->getImage());

        $entityManager->remove($report);
        $entityManager->flush();

        $this->addFlash('success', 'Rapport supprimé avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_reports') . '#reports-anchor'
        );
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

            return $this->redirect(
                $this->generateUrl('admin_reports') . '#reportsSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }

    #[Route('/admin/reports/report_update/{id}', name: 'admin_reports_update')]
    public function updateReport(
        Request $request,
        Reports $report,
        SubmitReport $submitReport,
        ReportsRepository $repository
    )
    {
        $reportsForm = $this->createForm(ReportsType::class, $report);

        $reportIsSubmited = $submitReport->handle($reportsForm, $request, $repository);
        if ($reportIsSubmited) {
            $this->addFlash('success', 'Le rapport a bien été mise à jour.');
            return $this->redirect(
                $this->generateUrl('admin_reports') . '#reports-anchor'
            );
        }

        return $this->render('back/reports/form.html.twig', [
            'reportForm' => $reportsForm,
            'report' => $report,
        ]);
    }
}
