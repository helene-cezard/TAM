<?php

namespace App\Controller\Back;

use App\Form\FranceSectionType;
use App\Repository\FranceSectionRepository;
use App\Repository\RubricInfoRepository;
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
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $sectionForm = $this->createForm(FranceSectionType::class);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $franceSection = $sectionForm->getData();
            $franceSection->setPosition(count($franceSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $entityManager->persist($franceSection);
            $entityManager->flush();

            $this->addFlash('success', 'Section ajoutée avec succès !');

            return $this->redirectToRoute('admin_france');
        }

        $franceSections = $franceSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_france']);
        return $this->render('back/france/index.html.twig', [
            'controller_name' => 'BackFranceController',
            'sections' => $franceSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm->createView(),
        ]);
    }

    #[Route('/admin/france/section_reorder', name: 'france_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        FranceSectionRepository $franceSectionRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $section = $franceSectionRepository->find($id);

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

    #[Route('/admin/france/section_delete/{id}', name: 'france_section_delete')]
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
}
