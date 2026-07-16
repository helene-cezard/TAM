<?php

namespace App\Controller\Back;

use App\Entity\CarouselImage;
use App\Entity\GalleryImage;
use App\Entity\Section\HomeSection;
use App\Form\CarouselImageType;
use App\Form\SectionForms\HomeSectionType;
use App\Repository\CarouselImageRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\Section\HomeSectionRepository;
use App\Service\ImageUploader;
use App\Service\SubmitCarouselImage;
use App\Service\SubmitSections;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackHomeController extends AbstractController
{
    #[Route('/admin', name: 'admin_home')]
    public function index(
        CarouselImageRepository $carouselImageRepository,
        HomeSectionRepository $homeSectionRepository,
        Request $request,
        SubmitSections $submitSections,
        GalleryImageRepository $galleryImageRepository,
        SubmitCarouselImage $submitCarouselImage,
    ): Response {
        $galleryImages = $galleryImageRepository->findAll();

        //Gestion de l'ajout d'images dans le caroussel
        $carouselImage = new CarouselImage;
        $carouselForm = $this->createForm(CarouselImageType::class, $carouselImage);

        $imageIsSubmitted = $submitCarouselImage->handleCarouselForm($carouselForm, $request, $carouselImage);

        if($imageIsSubmitted) {
            $this->addFlash('success', 'Image ajoutée au carrousel.');
            return $this->redirectToRoute('admin_home');
        }

        //Gestion du formulaire d'ajout de sections
        $sectionForm = $this->createForm(HomeSectionType::class);
        $isSubmitted = $submitSections->handle($sectionForm, $request, $homeSectionRepository);


        if ($isSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirect(
                $this->generateUrl('admin_home') . '#homeSections'
            );
        }

        $carouselImages = $carouselImageRepository->findBy([], ['position' => 'ASC']);
        $homeSections = $homeSectionRepository->findBy([], ['position' => 'ASC']);

        $carouselGalleryIds = array_map(
            fn(CarouselImage $carouselImage) => $carouselImage->getGalleryImage()->getId(),
            $carouselImages
        );

        $scrollTo = match (true) {
            $carouselForm->isSubmitted() && !$carouselForm->isValid() => 'carousel-error',
            $sectionForm->isSubmitted() && !$sectionForm->isValid() => 'section-error',
            default => null,
        };

        return $this->render('back/home/index.html.twig', [
            'controller_name' => 'BackHomeController',
            'carouselImages' => $carouselImages,
            'sections' => $homeSections,
            'sectionForm' => $sectionForm,
            'carouselForm' => $carouselForm,
            'galleryImages' => $galleryImages,
            'carouselGalleryIds' => $carouselGalleryIds,
            'scrollTo' => $scrollTo,
        ]);
    }

    #[Route('/admin/home/section_reorder', name: 'home_sections_reorder', methods: ['POST'])]
    public function reorderSections(
        Request $request,
        HomeSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_home') . '#homeSections'
        ]);
    }

    #[Route('/admin/home/carousel_reorder', name: 'carousel_reorder', methods: ['POST'])]
    public function reorderImages(
        Request $request,
        CarouselImageRepository $repository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $image = $repository->find($id);

            if ($image) {
                $image->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des images enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_home')
        ]);
    }

    #[Route('/admin/home/section_update/{id}', name: 'admin_home_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        HomeSection $homeSection
    )
    {
        $sectionForm = $this->createForm(HomeSectionType::class, $homeSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirect(
                $this->generateUrl('admin_home') . '#homeSections'
            );
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }

    #[Route('/admin/home/section_delete/{id}', name: 'admin_home_section_delete', methods: ['POST'])]
    public function deleteSection(
        HomeSectionRepository $homeSectionRepository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $homeSection = $homeSectionRepository->find($id);

        if (!$homeSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($homeSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirect(
            $this->generateUrl('admin_home') . '#homeSections'
        );
    }

    #[Route('/admin/home/carousel_delete/{id}', name: 'admin_home_carousel_delete', methods: ['POST'])]
    public function deleteCarousel(
        CarouselImageRepository $carouselImageRepository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $carouselImage = $carouselImageRepository->find($id);

        if (!$carouselImage) {
            throw $this->createNotFoundException('Image non trouvée');
        }

        $entityManager->remove($carouselImage);
        $entityManager->flush();

        $this->addFlash('success', 'Image supprimée avec succès !');

        return $this->redirectToRoute('admin_home');
    }
}
