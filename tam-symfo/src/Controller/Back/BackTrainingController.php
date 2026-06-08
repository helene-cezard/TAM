<?php

namespace App\Controller\Back;

use App\Form\TrainingSectionType;
use App\Repository\TrainingSectionRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackTrainingController extends AbstractController
{
    #[Route('/admin/training', name: 'admin_training')]
    public function index(
        TrainingSectionRepository $trainingSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $sectionForm = $this->createForm(TrainingSectionType::class);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $trainingSection = $sectionForm->getData();
            $trainingSection->setPosition(count($trainingSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $entityManager->persist($trainingSection);
            $entityManager->flush();

            $this->addFlash('success', 'Section ajoutée avec succès !');

            return $this->redirectToRoute('admin_training');
        }

        $trainingSections = $trainingSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_training']);
        return $this->render('back/training/index.html.twig', [
            'controller_name' => 'BackBeninController',
            'trainingSections' => $trainingSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm->createView(),
        ]);
    }

    #[Route('/admin/training/section_reorder', name: 'training_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        TrainingSectionRepository $trainingSectionRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $section = $trainingSectionRepository->find($id);

            if ($section) {
                $section->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_training')
        ]);
    }

    #[Route('/admin/training/section_delete/{id}', name: 'training_section_delete')]
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

        return $this->redirectToRoute('admin_training');
    }
}
