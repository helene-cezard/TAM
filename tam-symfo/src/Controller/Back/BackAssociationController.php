<?php

namespace App\Controller\Back;

use App\Entity\GalleryImage;
use App\Form\AssociationSectionType;
use App\Form\RubricInfoType;
use App\Repository\AssociationSectionRepository;
use App\Repository\GalleryImageRepository;
use App\Repository\RubricInfoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dom\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class BackAssociationController extends AbstractController
{

    #[Route('/admin/association', name: 'admin_association')]
    public function index(
        AssociationSectionRepository $associationSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        GalleryImageRepository $galleryImageRepository
    ): Response {
        $associationSections = $associationSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_association']);
        $galleryImages = $galleryImageRepository->findAll();


        $sectionForm = $this->createForm(AssociationSectionType::class, null, [
            'action' => $this->generateUrl('admin_association_section'), // URL de soumission pour le formulaire de section
        ]);
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo, [
            'action' => $this->generateUrl('admin_association_rubric'), // URL de soumission pour le formulaire de rubrique
        ]);

        return $this->render('back/association/index.html.twig', [
            'sections' => $associationSections,
            'rubricInfo' => $rubricInfo,
            'sectionForm' => $sectionForm->createView(),
            'rubricInfoForm' => $rubricInfoForm->createView(),
            'galleryImages' => $galleryImages,
        ]);
    }

    #[Route('/admin/association/rubric', name: 'admin_association_rubric', methods: ['POST'])]
    public function handleRubricForm(
        Request $request,
        EntityManagerInterface $entityManager,
        RubricInfoRepository $rubricInfoRepository,
        SluggerInterface $slugger,
        #[Autowire('%kernel.project_dir%/assets/images/uploadedImages')] string $imagesDirectory
    ): Response {
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'who_association']);
        $rubricInfoForm = $this->createForm(RubricInfoType::class, $rubricInfo);
        $rubricInfoForm->handleRequest($request);

        if ($rubricInfoForm->isSubmitted() && $rubricInfoForm->isValid()) {
            $image = $rubricInfoForm->get('uploadedImage')->getData();

            if($image) {

                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                try {
                    $image->move(
                        $imagesDirectory,
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer l'exception en cas d'erreur de téléchargement
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_association');
                }

                $galleryImage = new GalleryImage();
                $galleryImage->setPath('/images/uploadedImages/' . $newFilename);
                //!Changer la valeur alt en fonction du contexte d'utilisation de l'image
                $galleryImage->setAlt('Image de la rubrique');
                $galleryImage->setAppears(false);

                // Associer la nouvelle image à RubricInfo
                $rubricInfo->setGalleryImage($galleryImage);
                $entityManager->persist($galleryImage);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Rubrique mise à jour avec succès !');
        }

        return $this->redirectToRoute('admin_association');
    }

    #[Route('/admin/association/section', name: 'admin_association_section', methods: ['POST'])]
    public function handleSectionForm(
        Request $request,
        EntityManagerInterface $entityManager,
        AssociationSectionRepository $associationSectionRepository
    ): Response {
        $sectionForm = $this->createForm(AssociationSectionType::class);
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $associationSection = $sectionForm->getData();
            $associationSection->setPosition(count($associationSectionRepository->findAll()) + 1);

            $entityManager->persist($associationSection);
            $entityManager->flush();

            $this->addFlash('success', 'Section ajoutée avec succès !');
        }

        return $this->redirectToRoute('admin_association');
    }

    #[Route('/admin/association/section_reorder', name: 'admin_association_sections_reorder', methods: ['POST'])]
    public function reorder(
        Request $request,
        AssociationSectionRepository $repository,
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
            'redirect' => $this->generateUrl('admin_association')
        ]);
    }

    #[Route('/admin/association/section_delete/{id}', name: 'admin_association_section_delete')]
    public function deleteSection(
        AssociationSectionRepository $repository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $associationSection = $repository->find($id);

        if (!$associationSection) {
            throw $this->createNotFoundException('Section non trouvée');
        }

        $entityManager->remove($associationSection);
        $entityManager->flush();

        $this->addFlash('success', 'Section supprimée avec succès !');

        return $this->redirectToRoute('admin_association');
    }
}
