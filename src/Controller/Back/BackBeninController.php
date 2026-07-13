<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\BeninSection;
use App\Form\SectionForms\BeninSectionType;
use App\Form\RubricInfoType;
use App\Repository\Section\BeninSectionRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\RubricInfoRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackBeninController extends AbstractController
{
    #[Route('/admin/benin', name: 'admin_benin')]
    public function index(
        BeninSectionRepository $beninSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_benin']);
        $galleryImages = $galleryImageRepository->findAll();
        $beninSections = $beninSectionRepository->findBy([], ['position' => 'ASC']);

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
                $this->generateUrl('admin_benin') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(BeninSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $beninSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_benin') . '#beninSections'
            );
        }

        return $this->render('back/benin/index.html.twig', [
            'sections' => $beninSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'rubricGalleryIds' => $rubricGalleryIds,
        ]);
    }

    #[Route('/admin/benin/section_reorder', name: 'admin_benin_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        BeninSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_benin') . '#beninSections'
        ]);
    }

    #[Route('/admin/benin/section_delete/{id}', name: 'admin_benin_section_delete', methods: ['POST'])]
    public function deleteSection(
        BeninSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $beninSection = $repository->find($id);

        if (!$beninSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($beninSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_benin') . '#beninSections'
        );
    }

    #[Route('/admin/benin/section_update/{id}', name: 'admin_benin_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        BeninSection $beninSection
    )
    {
        $sectionForm = $this->createForm(BeninSectionType::class, $beninSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_benin') . '#beninSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
