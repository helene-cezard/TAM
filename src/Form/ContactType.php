<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez indiquer votre nom.',
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                    ]),
                ],
                'attr' => [
                    'autocomplete' => 'name',
                ]
            ])
            ->add('e_mail', EmailType::class, [
                'label' => 'Adresse e-mail',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez indiquer votre adresse e-mail.',
                    ]),
                    new Assert\Email([
                        'message' => 'Veuillez saisir une adresse e-mail valide.',
                    ]),
                ],
                'attr' => [
                    'autocomplete' => 'email',
                ]
            ])
            ->add('subject', TextType::class, [
                'label' => 'Objet du message',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez indiquer un sujet.',
                    ]),
                    new Assert\Length([
                        'min' => 5,
                        'max' => 150,
                    ]),
        ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => array('rows' => '5'),
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le message ne peut pas être vide.',
                    ]),
                    new Assert\Length([
                        'min' => 20,
                        'max' => 5000,
                    ]),
                ],
                'required' => true,
            ])
            // Honeypot
            ->add('website', TextType::class, [
                'mapped' => false,
                'required' => false,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'tabindex' => '-1',
                ],
                'constraints' => [
                    new Assert\Blank([
                        'message' => 'Spam détecté.',
                    ]),
                ],
            ])
            // Champs caché pour détecter à quelle heure le formulaire a été généré (pour détecter les robots)
            ->add('generatedAt', HiddenType::class, [
                'mapped' => false,
                'data' => time(),
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
