<?php

namespace App\Controller\Back;

use App\Entity\Section\FranceSection;
use App\Form\SectionForms\FranceSectionType;
use App\Form\RubricInfoType;
use App\Repository\Section\FranceSectionRepository;
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

final class BackFranceController extends AbstractController
{
    #[Route('/admin/france', name: 'admin_france')]
    public function index(
        FranceSectionRepository $franceSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_france']);
        $galleryImages = $galleryImageRepository->findAll();
        $franceSections = $franceSectionRepository->findBy([], ['position' => 'ASC']);

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo, $galleryImages, $rubricInfoRepository);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirectToRoute('admin_france');
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(FranceSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $franceSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirectToRoute('admin_france');
        }

        return $this->render('back/france/index.html.twig', [
            'sections' => $franceSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
        ]);
    }

    #[Route('/admin/france/section_reorder', name: 'admin_france_sections_reorder', methods: ['POST'])]
    public function reorder(
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
            'redirect' => $this->generateUrl('admin_france')
        ]);
    }

    #[Route('/admin/france/section_delete/{id}', name: 'admin_france_section_delete')]
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

        return $this->redirectToRoute('admin_france');
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

            return $this->redirectToRoute('admin_france');
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
