<?php

namespace App\Controller\Back;

use App\Entity\Section\ResourcesSection;
use App\Form\SectionForms\ResourcesSectionType;
use App\Form\RubricInfoType;
use App\Repository\GalleryImageRepository;
use App\Repository\Section\ResourcesSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackResourcesController extends AbstractController
{
    #[Route('/admin/ressources', name: 'admin_resources')]
    public function index(
        ResourcesSectionRepository $resourcesSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'resources']);
        $galleryImages = $galleryImageRepository->findAll();
        $resourcesSections = $resourcesSectionRepository->findBy([], ['position' => 'ASC']);

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo, $galleryImages, $rubricInfoRepository);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirectToRoute('admin_resources');
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(ResourcesSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $resourcesSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirectToRoute('admin_resources');
        }

        return $this->render('back/resources/index.html.twig', [
            'sections' => $resourcesSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
        ]);
    }

    #[Route('/admin/resources/section_reorder', name: 'admin_resources_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        ResourcesSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_resources')
        ]);
    }

    #[Route('/admin/resources/section_delete/{id}', name: 'admin_resources_section_delete')]
    public function deleteSection(
        ResourcesSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $resourcesSection = $repository->find($id);

        if (!$resourcesSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($resourcesSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirectToRoute('admin_resources');
    }

    #[Route('/admin/resources/section_update/{id}', name: 'admin_resources_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        ResourcesSection $resourcesSection
    )
    {
        $sectionForm = $this->createForm(ResourcesSectionType::class, $resourcesSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirectToRoute('admin_resources');
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
