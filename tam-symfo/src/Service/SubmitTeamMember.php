<?php
namespace App\Service;

use App\Entity\Team;
use App\Service\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitTeamMember
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private TeamImageUploader $imageUploader
        )
    {
        $this->entityManager = $entityManager;
        $this->imageUploader = $imageUploader;
    }

    public function handleImageForm(
        FormInterface $imageForm,
        Request $request
        ): bool
    {
        $imageForm->handleRequest($request);

        if ($imageForm->isSubmitted() && $imageForm->isValid()) {
            $image = $imageForm->get('uploadedImage')->getData();

            $teamMember = new Team();
            if($image) {
                $newFilename = $this->imageUploader->upload($image);
                $teamMember->setImage('/images/team/' . $newFilename);
            }

            $teamMember->setName($imageForm->get('name')->getData());
            $teamMember->setPresentation($imageForm->get('presentation')->getData());
            $teamMember->setRole($imageForm->get('role')->getData());

            $this->entityManager->persist($teamMember);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}