<?php

namespace App\Controller\Back;

use App\Form\BeninSectionType;
use App\Repository\BeninSectionRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackBeninController extends AbstractController
{
    #[Route('/admin/benin', name: 'admin_benin')]
    public function index(
        BeninSectionRepository $beninSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $sectionForm = $this->createForm(BeninSectionType::class);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $homeSection = $sectionForm->getData();
            $homeSection->setPosition(count($beninSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $entityManager->persist($homeSection);
            $entityManager->flush();

            $this->addFlash('success', 'Section ajoutée avec succès !');

            return $this->redirectToRoute('admin_benin');
        }

        $beninSections = $beninSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_benin']);
        return $this->render('back/benin/index.html.twig', [
            'controller_name' => 'BackBeninController',
            'sections' => $beninSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm->createView(),
        ]);
    }

    #[Route('/admin/benin/section_reorder', name: 'benin_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        BeninSectionRepository $beninSectionRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $section = $beninSectionRepository->find($id);

            if ($section) {
                $section->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_benin')
        ]);
    }

    #[Route('/admin/benin/section_delete/{id}', name: 'benin_section_delete')]
    public function deleteSection(
        BeninSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $beninSection = $repository->find($id);

        if (!$beninSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($beninSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirectToRoute('admin_benin');
    }
}
