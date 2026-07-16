<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\TeamSection;
use App\Entity\Team;
use App\Form\RubricInfoType;
use App\Form\SectionForms\TeamSectionType;
use App\Form\TeamType;
use App\Repository\GalleryImageRepository;
use App\Repository\RoleRepository;
use App\Repository\Section\TeamSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\TeamRepository;
use App\Service\DeleteFromServer;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use App\Service\SubmitTeamMember;
use App\Service\TeamImageUploader;
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
        SubmitRubricInfo $submitRubricInfo,
        SubmitTeamMember $submitTeamMember,
        RoleRepository  $roleRepository
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_team']);
        $galleryImages = $galleryImageRepository->findAll();
        $teamSections = $teamSectionRepository->findBy([], ['position' => 'ASC']);
        $roles = $roleRepository->findBy([], ['position' => 'ASC']);

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
                $this->generateUrl('admin_team') . '#rubricInfo'
            );
        }

        //Gestion du formulaire d'ajout d'un membre de l'équipe
        $teamForm = $this->createForm(TeamType::class);
        $teamMemberIsSubmitted = $submitTeamMember->handleImageForm($teamForm, $request);
        if ($teamMemberIsSubmitted) {
            $this->addFlash('success', 'Membre de l\'équipe ajouté avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_team') . '#teamMembers'
            );
        }


        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(TeamSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $teamSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_team') . '#teamSections'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $teamForm->isSubmitted() && !$teamForm->isValid() => 'team-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/team/index.html.twig', [
            'rubricInfo' => $rubricInfo,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'roles' => $roles,
            'teamForm' => $teamForm,
            'sections' => $teamSections,
            'sectionForm' => $sectionForm,
            'rubricGalleryIds' => $rubricGalleryIds,
            'scrollTo' => $scrollTo,
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
            'redirect' => $this->generateUrl('admin_team') . '#teamSections'
        ]);
    }

    #[Route('/admin/equipe/section_delete/{id}', name: 'admin_team_section_delete', methods: ['POST'])]
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

        return $this->redirect(
            $this->generateUrl('admin_team') . '#teamSections'
        );
    }

    #[Route('/admin/equipe/section_update/{id}', name: 'admin_team_section_update')]
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

            return $this->redirect(
                $this->generateUrl('admin_team') . '#teamSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }

    #[Route('/admin/equipe/member_delete/{id}', name: 'admin_team_member_delete', methods: ['POST'])]
    public function deleteMember(
        TeamRepository $repository,
        EntityManagerInterface $entityManager,
        DeleteFromServer $deleteFromServer,
        int $id
    ): Response {
        $teamMember = $repository->find($id);

        if (!$teamMember) {
            throw $this->createNotFoundException('Membre de l\équipe non trouvée');
        }

        if ($teamMember->getImage()) {
            $deleteFromServer->delete($teamMember->getImage());
        }

        $entityManager->remove($teamMember);
        $entityManager->flush();

        $this->addFlash('success', 'Membre de l\'équipe supprimé avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_team') . '#teamMembers'
        );
    }

    #[Route('/admin/equipe/member_update/{id}', name: 'admin_team_member_update')]
    public function updateMember(
        Request $request,
        Team $teamMember,
        SubmitTeamMember $submitTeamMember,
    )
    {
        $teamForm = $this->createForm(TeamType::class, $teamMember, [
            'remove_image' => true, // Active l'option pour afficher le champ removeImage
        ]);

        $teamMemberIsSubmitted = $submitTeamMember->handleImageForm($teamForm, $request);
        if ($teamMemberIsSubmitted) {
            $this->addFlash('success', 'Membre de l\'équipe modifié avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_team') . '#teamMembers'
            );
        }

        return $this->render('back/team/form.html.twig', [
            'teamForm' => $teamForm,
            'teamMember' => $teamMember,
        ]);
    }
}
