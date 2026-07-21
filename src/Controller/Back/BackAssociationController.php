<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\AssociationSection;
use App\Form\SectionForms\AssociationSectionType;
use App\Form\RubricInfoType;
use App\Repository\Section\AssociationSectionRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\RubricInfoRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackAssociationController extends AbstractController
{

    #[Route('/admin/association', name: 'admin_association')]
    public function index(
        AssociationSectionRepository $associationSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_association']);
        $galleryImages = $galleryImageRepository->findAll();
        $associationSections = $associationSectionRepository->findBy([], ['position' => 'ASC']);

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
                $this->generateUrl('admin_association') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(AssociationSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $associationSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_association') . '#associationSections'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/association/index.html.twig', [
            'sections' => $associationSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'rubricGalleryIds' => $rubricGalleryIds,
            'scrollTo' => $scrollTo,
        ]);
    }

    #[Route('/admin/association/section_reorder', name: 'admin_association_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        AssociationSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_association') . '#associationSections'
        ]);
    }

    #[Route('/admin/association/section_delete/{id}', name: 'admin_association_section_delete', methods: ['POST'])]
    public function deleteSection(
        AssociationSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $associationSection = $repository->find($id);

        if (!$associationSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($associationSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_association') . '#associationSections'
        );
    }

    #[Route('/admin/association/section_update/{id}', name: 'admin_association_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        AssociationSection $associationSection
    )
    {
        $sectionForm = $this->createForm(AssociationSectionType::class, $associationSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_association') . '#associationSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
