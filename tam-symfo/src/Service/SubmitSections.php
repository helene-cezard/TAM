<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitSections
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(
        FormInterface $sectionForm,
        Request $request,
        $repository
        ): bool
    {
        $sectionForm->handleRequest($request);

        if ($sectionForm->isSubmitted() && $sectionForm->isValid()) {
            $section = $sectionForm->getData();
            $section->setPosition(count($repository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $this->entityManager->persist($section);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}