<?php

namespace App\Controller\Back;

use App\Form\TeamSectionType;
use App\Repository\TeamSectionRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackTeamController extends AbstractController
{
    #[Route('/admin/equipe', name: 'admin_team')]
    public function index(
        TeamSectionRepository $teamSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        Request $request,
        // EntityManagerInterface $entityManager
    ): Response
    {
        // $sectionForm = $this->createForm(TeamSectionType::class);
        // $sectionForm->handleRequest($request);

        // if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
        //     $homeSection = $sectionForm->getData();
        //     $homeSection->setPosition(count($teamSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

        //     $entityManager->persist($homeSection);
        //     $entityManager->flush();

        //     $this->addFlash('success', 'Section ajoutée avec succès !');

        //     return $this->redirectToRoute('admin_team');
        // }

        $teamSections = $teamSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_team']);
        return $this->render('back/team/index.html.twig', [
            'controller_name' => 'BackTeamController',
            'teamSections' => $teamSections,
            'rubricInfo' => $rubricInfo,
            // 'sectionForm' => $sectionForm->createView(),
        ]);
    }

    // #[Route('/admin/team/section_reorder', name: 'team_sections_reorder', methods: ['POST'])]
    // public function reorder(
    //     Request $request,
    //     TeamSectionRepository $teamSectionRepository,
    //     EntityManagerInterface $entityManager
    // ): JsonResponse {

    //     $ids = json_decode($request->getContent(), true);

    //     foreach ($ids as $position => $id) {

    //         $section = $teamSectionRepository->find($id);

    //         if ($section) {
    //             $section->setPosition($position + 1);
    //         }
    //     }

    //     $entityManager->flush();

    //     $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

    //     return new JsonResponse([
    //         'redirect' => $this->generateUrl('admin_team')
    //     ]);
    // }

    // #[Route('/admin/team/section_delete/{id}', name: 'team_section_delete')]
    // public function deleteSection(
    //     TeamSectionRepository $repository,
    //     EntityManagerInterface $entityManager,
    //     int $id
    // ): Response {
    //     $teamSection = $repository->find($id);

    //     if (!$teamSection) {
    //         throw $this->createNotFoundException('Section non trouvée');
    //     }

    //     $entityManager->remove($teamSection);
    //     $entityManager->flush();

    //     $this->addFlash('success', 'Section supprimée avec succès !');

    //     return $this->redirectToRoute('admin_team');
    // }
}
