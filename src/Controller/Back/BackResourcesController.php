<?php

namespace App\Controller\Back;

use App\Entity\GalleryImage;
use App\Entity\RubricInfo;
use App\Entity\Section\ResourcesSection;
use App\Entity\Visual;
use App\Form\GalleryImageType;
use App\Form\ImageCategoryType;
use App\Form\SectionForms\ResourcesSectionType;
use App\Form\RubricInfoType;
use App\Form\VideoType;
use App\Form\VisualType;
use App\Repository\GalleryImageRepository;
use App\Repository\ImageCategoryRepository;
use App\Repository\Section\ResourcesSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\VideoRepository;
use App\Repository\VisualRepository;
use App\Service\DeleteFromServer;
use App\Service\GalleryImageUsageChecker;
use App\Service\SubmitImage;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use App\Service\SubmitVideo;
use App\Service\SubmitVisual;
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
        SubmitRubricInfo $submitRubricInfo,
        ImageCategoryRepository $imageCategoryRepository,
        SubmitImage $submitImage,
        SubmitVideo $submitVideo,
        VideoRepository $videoRepository,
        VisualRepository $visualRepository,
        SubmitVisual $submitVisual,
        EntityManagerInterface $entityManager
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'resources']);
        $galleryImages = $galleryImageRepository->findAll();
        $resourcesSections = $resourcesSectionRepository->findBy([], ['position' => 'ASC']);
        $categories = $imageCategoryRepository->findBy([], ['position' => 'ASC']);
        $videos = $videoRepository->findAll();
        $visuals = $visualRepository->findBy([], ['position' => 'ASC']);

        $rubrics = $rubricInfoRepository->findAll();
        $rubricGalleryIds = array_map(
            fn(RubricInfo $rubric) => $rubric->getGalleryImage()?->getId(),
            $rubrics
        );

        $usedCategoryIds = array_map(
            fn(GalleryImage $galleryImage) => $galleryImage->getCategory()?->getId(),
            $galleryImages
        );

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'En-tête de rubrique mis à jour avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#rubricInfo'
            );
        }

        //Gestion du formulaire d'ajout d'images
        $imageForm = $this->createForm(GalleryImageType::class);
        $imageIsSubmitted = $submitImage->handleImageForm($imageForm, $request);
        if ($imageIsSubmitted) {
            $this->addFlash('success', 'Image ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#gallerie'
            );
        }

        //Gestion du formulaire d'ajout de catégories de la galerie
        $categoryForm = $this->createForm(ImageCategoryType::class);
        $categoryForm->handleRequest($request);
        if ($categoryForm->isSubmitted() && $categoryForm->isValid()) {

            $category = $categoryForm->getData();
            $category->setPosition(count($imageCategoryRepository->findAll()) + 1);
            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#imageCategories'
            );
        }

        //Gestion du formulaire d'ajout de vidéos
        $videoForm = $this->createForm(VideoType::class);
        $videoIsSubmitted = $submitVideo->handleVideoForm($videoForm, $request);
        if ($videoIsSubmitted) {
            $this->addFlash('success', 'Vidéo ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#videos'
            );
        }

        //Gestion du formulaire d'ajout de supports visuels
        $visualForm = $this->createForm(VisualType::class);
        $visualIsSubmitted = $submitVisual->handleVisualForm($visualForm, $request, $visualRepository);
        if ($visualIsSubmitted) {
            $this->addFlash('success', 'Support ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#visuals-anchor'
            );
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(ResourcesSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $resourcesSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#resourcesSections'
            );
        }

        $scrollTo = match (true) {
            $rubricInfoForm->isSubmitted() && !$rubricInfoForm->isValid() => 'rubricInfo-error',
            $imageForm->isSubmitted() && !$imageForm->isValid() => 'image-error',
            $categoryForm->isSubmitted() && !$categoryForm->isValid() => 'imageCategories',
            $videoForm->isSubmitted() && !$videoForm->isValid() => 'video-error',
            $visualForm->isSubmitted() && !$visualForm->isValid() => 'visual-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/resources/index.html.twig', [
            'sections' => $resourcesSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
            'categories' => $categories,
            'imageForm' => $imageForm,
            'videoForm' => $videoForm,
            'videos' => $videos,
            'visuals' => $visuals,
            'visualForm' => $visualForm,
            'rubricGalleryIds' => $rubricGalleryIds,
            'categoryForm' => $categoryForm,
            'usedCategoryIds' => $usedCategoryIds,
            'scrollTo' => $scrollTo,
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

        return new JsonResponse([
            'success' => 'Ordre des sections enregistré avec succès !',
            'redirect' => $this->generateUrl('admin_resources') . '#resourcesSections'
        ]);
    }

    #[Route('/admin/ressources/section_delete/{id}', name: 'admin_resources_section_delete', methods: ['POST'])]
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

        return $this->redirect(
            $this->generateUrl('admin_resources') . '#resourcesSections'
        );
    }

    #[Route('/admin/ressources/section_update/{id}', name: 'admin_resources_section_update')]
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

            return $this->redirect(
                $this->generateUrl('admin_resources') . '#resourcesSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }

    #[Route('/admin/ressources/image_delete/{id}', name: 'admin_resources_image_delete', methods: ['POST'])]
    public function deleteImage(
        GalleryImageRepository $repository,
        EntityManagerInterface $entityManager,
        DeleteFromServer $deleteFromServer,
        GalleryImageUsageChecker $usageChecker,
        int $id
    ): Response {
        $galleryImage = $repository->find($id);

        if (!$galleryImage) {
            throw $this->createNotFoundException('Image non trouvée');
        }

        if ($usageChecker->isUsed($galleryImage)) {
            $this->addFlash(
                'error',
                'Cette image est utilisée sur le site. Supprimez d\'abord toutes les références avant de la retirer de la galerie.'
            );

            return $this->redirect(
                $this->generateUrl('admin_resources') . '#image-error'
            );
        }

        $deleteFromServer->delete($galleryImage->getPath());

        $entityManager->remove($galleryImage);
        $entityManager->flush();

        $this->addFlash('success', 'Image supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_resources') . '#gallerie'
        );
    }

    #[Route('/admin/ressources/image_update/{id}', name: 'admin_resources_image_update')]
    public function updateImage(
        Request $request,
        EntityManagerInterface $entityManager,
        GalleryImage $galleryImage
    )
    {
        $imageForm = $this->createForm(GalleryImageType::class, $galleryImage, [
            'upload_image' => false, // Désactive le champ d'upload d'image
        ]);
        $imageForm->handleRequest($request);

        if ($imageForm->isSubmitted() && $imageForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'L\'image a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_resources') . '#gallerie'
            );
        }

        return $this->render('back/gallery/form.html.twig', [
            'imageForm' => $imageForm,
            'galleryImage' => $galleryImage,
        ]);
    }

    #[Route('/admin/ressources/video_delete/{id}', name: 'admin_resources_video_delete', methods: ['POST'])]
    public function deleteVideo(
        VideoRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $video = $repository->find($id);

        if (!$video) {
            throw $this->createNotFoundException('Vidéo non trouvée');
        }

        if ($video->getType() === 'local') {
            $videoPath = $this->getParameter('kernel.project_dir') . '/assets/' . $video->getPath();
            if (is_file($videoPath)) {
                unlink($videoPath);
            }
        }

        $entityManager->remove($video);
        $entityManager->flush();

        $this->addFlash('success', 'Vidéo supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_resources') . '#videos'
        );
    }

    #[Route('/admin/resources/visual_reorder', name: 'admin_resources_visual_reorder', methods: ['POST'])]
    public function visualReorder(
        Request $request,
        VisualRepository $visualRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {
            $visual = $visualRepository->find($id);

            if ($visual) {
                $visual->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        return new JsonResponse([
            'success' => 'Ordre des supports visuels enregistré avec succès !',
            'redirect' => $this->generateUrl('admin_resources') . '#visuals-anchor'
        ]);
    }

    #[Route('/admin/ressources/visual_update/{id}', name: 'admin_resources_visual_update')]
    public function visualUpdate(
        Request $request,
        Visual $visual,
        SubmitVisual $submitVisual,
        VisualRepository $visualRepository,
    ) {

        $visualForm = $this->createForm(VisualType::class, $visual);

        $visualIsSubmitted = $submitVisual->handleVisualForm($visualForm, $request, $visualRepository);
        if ($visualIsSubmitted) {
            $this->addFlash('success', 'Le support visuel a bien été mis à jour.');
            return $this->redirect(
                $this->generateUrl('admin_resources') . '#visuals-anchor'
            );
        }

        return $this->render('back/visual/form.html.twig', [
            'visualForm' => $visualForm,
            'visual' => $visual,
        ]);
    }

    #[Route('/admin/ressources/visual_delete/{id}', name: 'admin_resources_visual_delete', methods: ['POST'])]
    public function visualDelete(
        VisualRepository $visualRepository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $visual = $visualRepository->find($id);

        if (!$visual) {
            throw $this->createNotFoundException('Support visuel non trouvé');
        }

        $visualPath = $this->getParameter('kernel.project_dir') . '/assets/' . $visual->getPath();
        $visualImagePath = $this->getParameter('kernel.project_dir') . '/assets/' . $visual->getImage();
        if (is_file($visualPath)) {
            unlink($visualPath);
        }
        if (is_file($visualImagePath)) {
            unlink($visualImagePath);
        }

        $entityManager->remove($visual);
        $entityManager->flush();

        $this->addFlash('success', 'Support visuel supprimé avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_resources') . '#visuals-anchor'
        );
    }

    #[Route('/admin/resources/categories_reorder', name: 'admin_resources_categories_reorder', methods: ['POST'])]
    public function categoriesReorder(
        Request $request,
        ImageCategoryRepository $categoryRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {
            $category = $categoryRepository->find($id);

            if ($category) {
                $category->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        return new JsonResponse([
            'success' => 'Ordre des catégories enregistré avec succès !',
            'redirect' => $this->generateUrl('admin_resources') . '#imageCategories'
        ]);
    }

    #[Route('/admin/ressources/category_delete/{id}', name: 'admin_resources_category_delete', methods: ['POST'])]
    public function deleteCategory(
        ImageCategoryRepository $repository,
        EntityManagerInterface  $entityManager,
        int $id,
    )
    {
        $category = $repository->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Catégorie non trouvée');
        }

        $entityManager->remove($category);
        $entityManager->flush();

        $this->addFlash('success', 'Catégorie supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_resources') . '#imageCategories'
        );
    }
}
