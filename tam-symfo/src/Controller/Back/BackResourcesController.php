<?php

namespace App\Controller\Back;

use App\Entity\GalleryImage;
use App\Entity\Section\ResourcesSection;
use App\Form\GalleryImageType;
use App\Form\SectionForms\ResourcesSectionType;
use App\Form\RubricInfoType;
use App\Form\VideoType;
use App\Repository\GalleryImageRepository;
use App\Repository\ImageCategoryRepository;
use App\Repository\Section\ResourcesSectionRepository;
use App\Repository\RubricInfoRepository;
use App\Repository\VideoRepository;
use App\Service\SubmitImage;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
use App\Service\SubmitVideo;
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
        VideoRepository $videoRepository
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'resources']);
        $galleryImages = $galleryImageRepository->findAll();
        $resourcesSections = $resourcesSectionRepository->findBy([], ['position' => 'ASC']);
        $categories = $imageCategoryRepository->findAll();
        $videos = $videoRepository->findAll();

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirectToRoute('admin_resources');
        }

        //Gestion du formulaire d'ajout d'images
        $imageForm = $this->createForm(GalleryImageType::class);
        $imageIsSubmitted = $submitImage->handleImageForm($imageForm, $request);
        if ($imageIsSubmitted) {
            $this->addFlash('success', 'Image ajoutée avec succès !');
            return $this->redirectToRoute('admin_resources');
        }

        //Gestion du formulaire d'ajout de vidéos
        $videoForm = $this->createForm(VideoType::class);
        $videoIsSubmitted = $submitVideo->handleVideoForm($videoForm, $request);
        if ($videoIsSubmitted) {
            $this->addFlash('success', 'Vidéo ajoutée avec succès !');
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
            'categories' => $categories,
            'imageForm' => $imageForm,
            'videoForm' => $videoForm,
            'videos' => $videos,
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

    #[Route('/admin/resources/image_delete/{id}', name: 'admin_resources_image_delete')]
    public function deleteImage(
        GalleryImageRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $galleryImage = $repository->find($id);

        if (!$galleryImage) {
            throw $this->createNotFoundException('Image non trouvée');
        }

        $entityManager->remove($galleryImage);
        $entityManager->flush();

        $this->addFlash('success', 'Image supprimée avec succès !');

        return $this->redirectToRoute('admin_resources');
    }

    #[Route('/admin/resources/image_update/{id}', name: 'admin_resources_image_update')]
    public function updateImage(
        Request $request,
        EntityManagerInterface $entityManager,
        GalleryImage $galleryImage
    )
    {
        $imageForm = $this->createForm(GalleryImageType::class, $galleryImage);
        $imageForm->handleRequest($request);

        if ($imageForm->isSubmitted() && $imageForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'L\'image a bien été mise à jour.');

            return $this->redirectToRoute('admin_resources');
        }

        return $this->render('back/gallery/form.html.twig', [
            'imageForm' => $imageForm,
            'galleryImage' => $galleryImage,
        ]);
    }
}
