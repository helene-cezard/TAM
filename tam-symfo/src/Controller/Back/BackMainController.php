<?php

namespace App\Controller\Back;

use App\Form\HomeSectionType;
use App\Repository\CarouselImageRepository;
use App\Repository\HomeSectionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackMainController extends AbstractController
{
    #[Route('/admin', name: 'admin_main')]
    public function index(
        CarouselImageRepository $carouselImageRepository,
        HomeSectionRepository $homeSectionRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {

        $sectionForm = $this->createForm(HomeSectionType::class);

        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $homeSection = $sectionForm->getData();
            $homeSection->setPosition(count($homeSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $entityManager->persist($homeSection);
            $entityManager->flush();

            $this->addFlash('success', 'Section ajoutée avec succès !');

            return $this->redirectToRoute('admin_main');
        }

        $carouselImages = $carouselImageRepository->findBy([], ['position' => 'ASC']);
        $homeSections = $homeSectionRepository->findBy([], ['position' => 'ASC']);

        return $this->render('back/main/index.html.twig', [
            'controller_name' => 'BackMainController',
            'carouselImages' => $carouselImages,
            'homeSections' => $homeSections,
            'sectionForm' => $sectionForm->createView(),
        ]);
    }

    #[Route('/admin/sections/reorder', name: 'sections_reorder', methods: ['POST'])]
    public function reorder(
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
            'redirect' => $this->generateUrl('admin_main')
        ]);
    }

    #[Route('/admin/section/delete/{id}', name: 'admin_section_delete')]
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

        return $this->redirectToRoute('admin_main');
    }
}
