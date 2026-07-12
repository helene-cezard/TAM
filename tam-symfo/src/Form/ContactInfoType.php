<?php

namespace App\Form;

use App\Entity\ContactInfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class ContactInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('street', TextType::class, [
                'label' => 'Rue',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex. : 12 rue Victor Hugo',
                    'autocomplete' => 'street-address',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner une adresse.',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'L’adresse est trop courte.',
                        'maxMessage' => 'L’adresse ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])

            ->add('postal_code', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'attr' => [
                    'placeholder' => '75001',
                    'autocomplete' => 'postal-code',
                    'inputmode' => 'numeric',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner un code postal.',
                    ]),
                    new Assert\Regex([
                        // France métropolitaine + DOM
                        'pattern' => '/^(?:0[1-9]|[1-8]\d|9[0-8])\d{3}$/',
                        'message' => 'Veuillez saisir un code postal valide.',
                    ]),
                ],
            ])

            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Paris',
                    'autocomplete' => 'address-level2',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner une ville.',
                    ]),
                    new Assert\Length([
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('e_mail', EmailType::class, [
                'label' => 'Adresse e-mail',
                'required' => true,
                'attr' => [
                    'placeholder' => 'contact@association.fr',
                    'autocomplete' => 'email',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner une adresse e-mail.',
                    ]),
                    new Assert\Email([
                        'message' => 'Veuillez saisir une adresse e-mail valide.',
                    ]),
                ],
            ])

            ->add('phone', TelType::class, [
                'label' => 'Numéro de téléphone',
                'required' => false,
                'attr' => [
                    'placeholder' => '01 23 45 67 89',
                    'autocomplete' => 'tel',
                    'inputmode' => 'tel',
                ],
                'constraints' => [
                    new Assert\Length([
                        'max' => 30,
                    ]),
                    new Assert\Regex([
                        // Accepte les formats français et internationaux courants
                        'pattern' => '/^\+?[0-9\s().-]{8,30}$/',
                        'message' => 'Veuillez saisir un numéro de téléphone valide.',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactInfo::class,
        ]);
    }
}
