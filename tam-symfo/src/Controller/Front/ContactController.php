<?php

namespace App\Controller\Front;

use App\Form\ContactType;
use App\Repository\ContactInfoRepository;
use App\Repository\Section\ContactSectionRepository;
use App\Repository\RubricInfoRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(
        ContactSectionRepository $contactSectionRepository,
        RubricInfoRepository $rubricInfoRepository,
        Request $request,
        MailerInterface $mailer
        ): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle form submission, e.g., send email or save data

            $sentEmail = (new TemplatedEmail())
                ->from("mail@mail.com")
                ->to("mail@mail.com")
                ->cc($form->get('email')->getData())
                ->subject($form->get('subject')->getData())
                ->htmlTemplate('emails/contact.html.twig')
                ->context([
                    'name' => $form->get('name')->getData(),
                    'userEmail' => $form->get('email')->getData(),
                    'subject' => $form->get('subject')->getData(),
                    'message' => $form->get('message')->getData(),
                ]);

                $mailer->send($sentEmail);

            $this->addFlash('success', 'Votre message a été envoyé avec succès !');
            return $this->redirectToRoute('app_contact');
        }

        $contactSections = $contactSectionRepository->findBy([], ['position' => 'ASC']);
        $rubricInfo = $rubricInfoRepository->findOneBy(['name' => 'contact']);
        return $this->render('front/contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'contactSections' => $contactSections,
            'rubricInfo' => $rubricInfo,
            'form' => $form,
        ]);
    }
}
