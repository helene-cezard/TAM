<?php

namespace App\Controller;

use App\Repository\ContactInfoRepository;
use App\Repository\ContactSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(ContactSectionRepository $contactSectionRepository, RubricInfoRepository $rubricInfoRepository): Response
    {
        $contactSections = $contactSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'contact']);
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'contactSections' => $contactSections,
            'rubricInfo' => $rubricInfo,
        ]);
    }
}
