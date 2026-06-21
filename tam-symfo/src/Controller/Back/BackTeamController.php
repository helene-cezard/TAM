<?php

namespace App\Controller\Back;

use App\Entity\Section\TeamSection;
use App\Form\RubricInfoType;
use App\Form\SectionForms\TeamSectionType;
use App\Repository\GalleryImageRepository;
use App\Repository\Section\TeamSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackTeamController extends AbstractController
{
    #[Route('/admin/equipe', name: 'admin_team')]
    public function index(
        TeamSectionRepository $teamSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_team']);
        $galleryImages = $galleryImageRepository->findAll();
        $teamSections = $teamSectionRepository->findBy([], ['position' => 'ASC']);

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo, $galleryImages, $rubricInfoRepository);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirectToRoute('admin_team');
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(TeamSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $teamSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirectToRoute('admin_team');
        }

        return $this->render('back/team/index.html.twig', [
            'sections' => $teamSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
        ]);
    }

    #[Route('/admin/team/section_reorder', name: 'admin_team_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        TeamSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_team')
        ]);
    }

    #[Route('/admin/team/section_delete/{id}', name: 'admin_team_section_delete')]
    public function deleteSection(
        TeamSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $teamSection = $repository->find($id);

        if (!$teamSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($teamSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirectToRoute('admin_team');
    }

    #[Route('/admin/team/section_update/{id}', name: 'admin_team_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        TeamSection $teamSection
    )
    {
        $sectionForm = $this->createForm(TeamSectionType::class, $teamSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirectToRoute('admin_team');
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
