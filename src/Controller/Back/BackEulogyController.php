<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\EulogySection;
use App\Form\RubricInfoType;
use App\Form\SectionForms\EulogySectionType;
use App\Repository\GalleryImageRepository;
use App\Repository\RoleRepository;
use App\Repository\Section\EulogySectionRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\TeamRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackEulogyController extends AbstractController
{
    #[Route('/admin/hommage', name: 'admin_eulogy')]
    public function index(
        EulogySectionRepository  $eulogySectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        TeamRepository $teamRepository,
        RoleRepository $roleRepository,
        SubmitRubricInfo $submitRubricInfo,
        SubmitSections $submitSections,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        ): Response
    {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'eulogy']);
        $galleryImages = $galleryImageRepository->findAll();
        $eulogySections = $eulogySectionRepository->findBy([], ['position' => 'ASC']);
        $presidentRole = $roleRepository->findOneBy(['name' => 'president']);
        $president = $teamRepository->findOneBy([
            'role' => $presidentRole,
        ]);

        $eulogySections = $eulogySectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'eulogy']);

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
                $this->generateUrl('admin_eulogy') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(EulogySectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $eulogySectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_eulogy') . '#eulogySections'
            );
        }
         return $this->render('back/eulogy/index.html.twig', [
            'sections' => $eulogySections,
            'eulogySections' => $eulogySections,
            'rubricInfo' => $rubricInfo,
            'president' => $president,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'sectionForm' => $sectionForm,
            'rubricGalleryIds' => $rubricGalleryIds,
        ]);
    }

    #[Route('/admin/eulogy/section_reorder', name: 'admin_eulogy_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        EulogySectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_eulogy') . '#eulogySections'
        ]);
    }

    #[Route('/admin/eulogy/section_delete/{id}', name: 'admin_eulogy_section_delete', methods: ['POST'])]
    public function deleteSection(
        EulogySectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $eulogySection = $repository->find($id);

        if (!$eulogySection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($eulogySection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_eulogy') . '#eulogySections'
        );
    }

    #[Route('/admin/eulogy/section_update/{id}', name: 'admin_eulogy_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        EulogySection $eulogySection
    )
    {
        $sectionForm = $this->createForm(EulogySectionType::class, $eulogySection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_eulogy') . '#eulogySections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
