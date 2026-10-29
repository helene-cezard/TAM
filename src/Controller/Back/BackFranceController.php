<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\Action;
use App\Entity\Section\FranceSection;
use App\Form\PartnerType;
use App\Form\SectionForms\ActionType;
use App\Form\SectionForms\FranceSectionType;
use App\Form\RubricInfoType;
use App\Repository\Section\FranceSectionRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\PartnerRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\Section\ActionRepository;
use App\Service\DeleteFromServer;
use App\Service\SubmitPartner;
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
        SubmitPartner $submitPartner,
        SubmitRubricInfo $submitRubricInfo,
        ActionRepository $actionRepository,
        PartnerRepository $partnerRepository
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'france']);
        $galleryImages = $galleryImageRepository->findAll();
        $franceSections = $franceSectionRepository->findBy([], ['position' => 'ASC']);
        $actions = $actionRepository->findBy([], ['position' => 'ASC']);
        $partners = $partnerRepository->findBy([], ['position' => 'ASC']);

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

        // Gestion du formulaire d'ajout de logos partenaires
        $partnerForm = $this->createForm(PartnerType::class);
        $partnerIsSubmitted = $submitPartner->handle($partnerForm, $request, $partnerRepository);
        if ($partnerIsSubmitted) {
            $this->addFlash('success', 'Logo partenaire ajouté avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_france') . '#partnersContainer'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $actionForm->isSubmitted() && !$actionForm->isValid() => 'action-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/france/index.html.twig', [
            'sections' => $franceSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'actionForm' => $actionForm,
            'actions' => $actions,
            'rubricGalleryIds' => $rubricGalleryIds,
            'scrollTo' => $scrollTo,
            'partners' => $partners,
            'partnerForm' => $partnerForm,
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

        return new JsonResponse([
            'success' => 'Ordre des sections enregistré avec succès !',
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

        return new JsonResponse([
            'success' => 'Ordre des actions enregistré avec succès !',
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

    #[Route('/admin/france/partner_reorder', name: 'admin_france_partners_reorder', methods: ['POST'])]
    public function reorderPartner(
        Request $request,
        PartnerRepository $repository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $partner = $repository->find($id);

            if ($partner) {
                $partner->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        return new JsonResponse([
            'success' => 'Ordre des partenaires enregistré avec succès !',
            'redirect' => $this->generateUrl('admin_france') . '#partnersContainer'
        ]);
    }

    #[Route('/admin/france/partner_delete/{id}', name: 'admin_france_partner_delete', methods: ['POST'])]
    public function deletePartner(
        PartnerRepository $repository,
        EntityManagerInterface $entityManager,
        DeleteFromServer $deleteFromServer,
        int $id
    ): Response {
        $partner = $repository->find($id);

        if (!$partner) {
            throw $this->createNotFoundException('Partenaire non trouvé');
        }

        $deleteFromServer->delete($partner->getImage());

        $entityManager->remove($partner);
        $entityManager->flush();

        $this->addFlash('success', 'Logo partenaire supprimé avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_france') . '#partnersContainer'
        );
    }
}
