<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\LegalSection;
use App\Form\SectionForms\LegalSectionType;
use App\Form\RubricInfoType;
use App\Repository\GalleryImageRepository;
use App\Repository\RoleRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\Section\LegalSectionRepository;
use App\Repository\TeamRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackLegalController extends AbstractController
{

    #[Route('/admin/legal', name: 'admin_legal')]
    public function index(
        LegalSectionRepository $legalSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo,
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'legal']);
        $galleryImages = $galleryImageRepository->findAll();
        $legalSections = $legalSectionRepository->findBy([], ['position' => 'ASC']);

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
                $this->generateUrl('admin_legal') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(LegalSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $legalSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_legal') . '#legalSections'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/legal/index.html.twig', [
            'sections' => $legalSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'rubricGalleryIds' => $rubricGalleryIds,
            'scrollTo' => $scrollTo,
        ]);
    }

    #[Route('/admin/legal/section_reorder', name: 'admin_legal_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        LegalSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_legal') . '#legalSections'
        ]);
    }

    #[Route('/admin/legal/section_delete/{id}', name: 'admin_legal_section_delete', methods: ['POST'])]
    public function deleteSection(
        LegalSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $legalSection = $repository->find($id);

        if (!$legalSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($legalSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_legal') . '#legalSections'
        );
    }

    #[Route('/admin/legal/section_update/{id}', name: 'admin_legal_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        LegalSection $legalSection
    )
    {
        $sectionForm = $this->createForm(LegalSectionType::class, $legalSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_legal') . '#legalSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
