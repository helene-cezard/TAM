<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\Action;
use App\Entity\Section\FranceSection;
use App\Form\SectionForms\ActionType;
use App\Form\SectionForms\FranceSectionType;
use App\Form\RubricInfoType;
use App\Repository\Section\FranceSectionRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\Section\ActionRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackFranceController extends AbstractController
{
    #[Route('/admin/france', name: 'admin_france')]
    public function index(
        FranceSectionRepository $franceSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo,
        ActionRepository $actionRepository
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_france']);
        $galleryImages = $galleryImageRepository->findAll();
        $franceSections = $franceSectionRepository->findBy([], ['position' => 'ASC']);
        $actions = $actionRepository->findBy([], ['position' => 'ASC']);

        $rubrics = $rubricInfoRepository->findAll();
        $rubricGalleryIds = array_map(
            fn(RubricInfo $rubric) => $rubric->getGalleryImage()?->getId(),
            $rubrics
        );

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_france') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout d'action
        $actionForm = $this->createForm(ActionType::class);
        $actionIsSubmitted = $submitSections->handle($actionForm, $request, $actionRepository);
        if ($actionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_france') . '#actionsContainer'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(FranceSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $franceSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_france') . '#franceSections'
            );
        }

        return $this->render('back/france/index.html.twig', [
            'sections' => $franceSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'actionForm' => $actionForm,
            'actions' => $actions,
            'rubricGalleryIds' => $rubricGalleryIds,
        ]);
    }

    #[Route('/admin/france/section_reorder', name: 'admin_france_sections_reorder', methods: ['POST'])]
    public function reorderSection(
        Request $request,
        FranceSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_france') . '#franceSections'
        ]);
    }

    #[Route('/admin/france/section_delete/{id}', name: 'admin_france_section_delete', methods: ['POST'])]
    public function deleteSection(
        FranceSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $franceSection = $repository->find($id);

        if (!$franceSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($franceSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_france') . '#franceSections'
        );
    }

    #[Route('/admin/france/section_update/{id}', name: 'admin_france_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        FranceSection $franceSection
    )
    {
        $sectionForm = $this->createForm(FranceSectionType::class, $franceSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_france') . '#franceSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }

    #[Route('/admin/france/action_reorder', name: 'admin_france_actions_reorder', methods: ['POST'])]
    public function reorderAction(
        Request $request,
        ActionRepository $repository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $action = $repository->find($id);

            if ($action) {
                $action->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des actions enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_france') . '#actionsContainer'
        ]);
    }

    #[Route('/admin/france/action_delete/{id}', name: 'admin_france_action_delete', methods: ['POST'])]
    public function deleteAction(
        ActionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $franceAction = $repository->find($id);

        if (!$franceAction) {
            throw $this->createNotFoundException('Action non trouvée');
        }

        $entityManager->remove($franceAction);
        $entityManager->flush();

        $this->addFlash('success', 'Action supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_france') . '#actionsContainer'
        );
    }

    #[Route('/admin/france/action_update/{id}', name: 'admin_france_action_update')]
    public function updateAction(
        Request $request,
        EntityManagerInterface $entityManager,
        Action $action
    )
    {
        $actionForm = $this->createForm(ActionType::class, $action);
        $actionForm->handleRequest($request);

        if ($actionForm->isSubmitted() && $actionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'L\'action a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_france') . '#actionsContainer'
            );
        }

        return $this->render('back/action/form.html.twig', [
            'actionForm' => $actionForm,
        ]);
    }
}
