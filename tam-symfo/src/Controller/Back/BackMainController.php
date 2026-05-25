<?php

namespace App\Controller\Back;

use App\Repository\CarouselImageRepository;
use App\Repository\HomeSectionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        ): Response
    {

        $sectionForm = $this->createForm(\App\Form\HomeSectionType::class);

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
}
