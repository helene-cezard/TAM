<?php

namespace App\Controller\Back;

use App\Form\ReportsSectionType;
use App\Repository\ReportsSectionRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackReportsController extends AbstractController
{
    #[Route('/admin/reports', name: 'admin_reports')]
    public function index(
        // ReportsSectionRepository $reportsSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        // Request $request,
        // EntityManagerInterface $entityManager
    ): Response
    {
        // $sectionForm = $this->createForm(ReportsSectionType::class);
        // $sectionForm->handleRequest($request);

        // if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
        //     $homeSection = $sectionForm->getData();
        //     $homeSection->setPosition(count($reportsSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

        //     $entityManager->persist($homeSection);
        //     $entityManager->flush();

        //     $this->addFlash('success', 'Section ajoutée avec succès !');

        //     return $this->redirectToRoute('admin_reports');
        // }

        // $reportsSections = $reportsSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_reports']);
        return $this->render('back/reports/index.html.twig', [
            'controller_name' => 'BackReportsController',
            // 'reportsSections' => $reportsSections,
            'rubricInfo' => $rubricInfo,
            // 'sectionForm' => $sectionForm->createView(),
        ]);
    }

    // #[Route('/admin/reports/section_reorder', name: 'reports_sections_reorder', methods: ['POST'])]
    // public function reorder(
    //     Request $request,
    //     ReportsSectionRepository $reportsSectionRepository,
    //     EntityManagerInterface $entityManager
    // ): JsonResponse {

    //     $ids = json_decode($request->getContent(), true);

    //     foreach ($ids as $position => $id) {

    //         $section = $reportsSectionRepository->find($id);

    //         if ($section) {
    //             $section->setPosition($position + 1);
    //         }
    //     }

    //     $entityManager->flush();

    //     $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

    //     return new JsonResponse([
    //         'redirect' => $this->generateUrl('admin_reports')
    //     ]);
    // }

    // #[Route('/admin/reports/section_delete/{id}', name: 'reports_section_delete')]
    // public function deleteSection(
    //     ReportsSectionRepository $repository,
    //     EntityManagerInterface $entityManager,
    //     int $id
    // ): Response {
    //     $reportsSection = $repository->find($id);

    //     if (!$reportsSection) {
    //         throw $this->createNotFoundException('Section non trouvée');
    //     }

    //     $entityManager->remove($reportsSection);
    //     $entityManager->flush();

    //     $this->addFlash('success', 'Section supprimée avec succès !');

    //     return $this->redirectToRoute('admin_reports');
    // }
}
