<?php

namespace App\Controller\Back;

use App\Entity\Section\ContactSection;
use App\Form\SectionForms\ContactSectionType;
use App\Form\RubricInfoType;
use App\Repository\Section\ContactSectionRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\RubricInfoRepository;
use App\Service\SubmitRubricInfo;
use App\Service\SubmitSections;
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
        GalleryImageRepository $galleryImageRepository,
        Request $request,
        SubmitSections $submitSections,
        SubmitRubricInfo $submitRubricInfo
        ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'contact']);
        $galleryImages = $galleryImageRepository->findAll();
        $contactSections = $contactSectionRepository->findBy([], ['position' => 'ASC']);

        // Gestion du formulaire de mise à jour de la rubrique
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricIsSubmitted = $submitRubricInfo->handleRubricForm($rubricInfoForm, $request, $rubricInfo, $galleryImages, $rubricInfoRepository);
        if ($rubricIsSubmitted) {
            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
            return $this->redirectToRoute('admin_contact');
        }

        // Gestion du formulaire d'ajout de section
        $sectionForm = $this->createForm(ContactSectionType::class);
        $sectionIsSubmitted = $submitSections->handle($sectionForm, $request, $contactSectionRepository);
        if ($sectionIsSubmitted) {
            $this->addFlash('success', 'Section ajoutée avec succès !');
            return $this->redirectToRoute('admin_contact');
        }

        return $this->render('back/contact/index.html.twig', [
            'sections' => $contactSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm,
            'rubricInfoForm' => $rubricInfoForm,
            'galleryImages' => $galleryImages,
        ]);
    }

    #[Route('/admin/contact/section_reorder', name: 'admin_contact_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        ContactSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_contact')
        ]);
    }

    #[Route('/admin/contact/section_delete/{id}', name: 'admin_contact_section_delete')]
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

    #[Route('/admin/contact/section_update/{id}', name: 'admin_contact_section_update')]
    public function updateSection(
        Request $request,
        EntityManagerInterface $entityManager,
        ContactSection $contactSection
    )
    {
        $sectionForm = $this->createForm(ContactSectionType::class, $contactSection);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La section a bien été mise à jour.');

            return $this->redirectToRoute('admin_contact');
        }

        return $this->render('back/section/form.html.twig', [
            'sectionForm' => $sectionForm,
        ]);
    }
}
