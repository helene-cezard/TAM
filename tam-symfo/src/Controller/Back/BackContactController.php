<?php

namespace App\Controller\Back;

use App\Form\ContactSectionType;
use App\Repository\ContactSectionRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackContactController extends AbstractController
{
    #[Route('/admin/contact', name: 'admin_contact')]
    public function index(
        ContactSectionRepository $contactSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $sectionForm = $this->createForm(ContactSectionType::class);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $contactSection = $sectionForm->getData();
            $contactSection->setPosition(count($contactSectionRepository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $entityManager->persist($contactSection);
            $entityManager->flush();

            $this->addFlash('success', 'Section ajoutée avec succès !');

            return $this->redirectToRoute('admin_contact');
        }

        $contactSections = $contactSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'actions_contact']);
        return $this->render('back/contact/index.html.twig', [
            'controller_name' => 'BackBeninController',
            'contactSections' => $contactSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm->createView(),
        ]);
    }

    #[Route('/admin/contact/section_reorder', name: 'contact_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        ContactSectionRepository $contactSectionRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $ids = json_decode($request->getContent(), true);

        foreach ($ids as $position => $id) {

            $section = $contactSectionRepository->find($id);

            if ($section) {
                $section->setPosition($position + 1);
            }
        }

        $entityManager->flush();

        $this->addFlash('success', 'Ordre des sections enregistré avec succès !');

        return new JsonResponse([
            'redirect' => $this->generateUrl('admin_contact')
        ]);
    }

    #[Route('/admin/contact/section_delete/{id}', name: 'contact_section_delete')]
    public function deleteSection(
        ContactSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $contactSection = $repository->find($id);

        if (!$contactSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($contactSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirectToRoute('admin_contact');
    }
}
