<?php

namespace App\Controller\Back;

use App\Form\ResourcesSectionType;
use App\Repository\ResourcesSectionRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackResourcesController extends AbstractController
{
    #[Route('/admin/resources', name: 'admin_resources')]
    public function index(
        // ResourcesSectionRepository $resourcesSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        // Request $request,
        // EntityManagerInterface $entityManager
    ): Response
    {
        // $sectionForm = $this->createForm(ResourcesSectionType::class);
        // $sectionForm->handleRequest($request);

        // if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
        //     $homeSection = $sectionForm->getData();
        //     $homeSection->setPosition(count($resourcesSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

        //     $entityManager->persist($homeSection);
        //     $entityManager->flush();

        //     $this->addFlash('success', 'Section ajoutée avec succès !');

        //     return $this->redirectToRoute('admin_resources');
        // }

        // $resourcesSections = $resourcesSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_resources']);
        return $this->render('back/resources/index.html.twig', [
            'controller_name' => 'BackResourcesController',
            // 'resourcesSections' => $resourcesSections,
            'rubricInfo' => $rubricInfo,
            // 'sectionForm' => $sectionForm->createView(),
        ]);
    }

    // #[Route('/admin/resources/section_reorder', name: 'resources_sections_reorder', methods: ['POST'])]
    // public function reorder(
    //     Request $request,
    //     ResourcesSectionRepository $resourcesSectionRepository,
    //     EntityManagerInterface $entityManager
    // ): JsonResponse {

    //     $ids = json_decode($request->getContent(), true);

    //     foreach ($ids as $position => $id) {

    //         $section = $resourcesSectionRepository->find($id);

    //         if ($section) {
    //             $section->setPosition($position + 1);
    //         }
    //     }

    //     $entityManager->flush();

    //     $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

    //     return new JsonResponse([
    //         'redirect' => $this->generateUrl('admin_resources')
    //     ]);
    // }

    // #[Route('/admin/resources/section_delete/{id}', name: 'resources_section_delete')]
    // public function deleteSection(
    //     ResourcesSectionRepository $repository,
    //     EntityManagerInterface $entityManager,
    //     int $id
    // ): Response {
    //     $resourcesSection = $repository->find($id);

    //     if (!$resourcesSection) {
    //         throw $this->createNotFoundException('Section non trouvée');
    //     }

    //     $entityManager->remove($resourcesSection);
    //     $entityManager->flush();

    //     $this->addFlash('success', 'Section supprimée avec succès !');

    //     return $this->redirectToRoute('admin_resources');
    // }
}
