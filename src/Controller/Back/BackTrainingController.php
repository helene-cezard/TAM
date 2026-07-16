<?php

namespace App\Controller\Back;

use App\Entity\RubricInfo;
use App\Entity\Section\TrainingSection;
use App\Form\RubricInfoType;
use App\Form\SectionForms\TrainingSectionType;
use App\Repository\GalleryImageRepository;
use App\Repository\Section\TrainingSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackTrainingController extends AbstractController
{
    #[Route('/admin/formation', name: 'admin_training')]
    public function index(
        TrainingSectionRepository $trainingSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'training']);
        $galleryImages = $galleryImageRepository->findAll();
        $trainingSections = $trainingSectionRepository->findBy([], ['position' => 'ASC']);

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
                $this->generateUrl('admin_training') . '#rubricInfo'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(TrainingSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $trainingSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_training') . '#trainingSections'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/training/index.html.twig', [
            'sections' => $trainingSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'rubricGalleryIds' => $rubricGalleryIds,
            'scrollTo' => $scrollTo,
        ]);
    }

    #[Route('/admin/training/section_reorder', name: 'admin_training_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        TrainingSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_training') . '#trainingSections'
        ]);
    }

    #[Route('/admin/training/section_delete/{id}', name: 'admin_training_section_delete', methods: ['POST'])]
    public function deleteSection(
        TrainingSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $trainingSection = $repository->find($id);

        if (!$trainingSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($trainingSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_training') . '#trainingSections'
        );
    }

    #[Route('/admin/training/section_update/{id}', name: 'admin_training_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        TrainingSection $trainingSection
    )
    {
        $sectionForm = $this->createForm(TrainingSectionType::class, $trainingSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_training') . '#trainingSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
