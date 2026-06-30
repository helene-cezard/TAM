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
        FormInterface $form,
        Request $request,
        $repository
        ): bool
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $section = $form->getData();
            $section->setPosition(count($repository->findAll()) + 1); // Positionner la nouvelle section à la fin

            $this->entityManager->persist($section);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}