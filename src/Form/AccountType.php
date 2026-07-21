<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', null, [
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Veuillez renseigner une adresse e-mail.',
                ]),
                new Assert\Email([
                    'message' => 'Veuillez saisir une adresse e-mail valide.',
                ]),
                new Assert\Length([
                    'max' => 180,
                ]),
            ],
        ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'invalid_message' => 'Vous devez entrer deux fois le même mot de passe',
                'first_options'  => ['label' => 'Choisissez un mot de passe'],
                'second_options' => ['label' => 'Répétez le mot de passe'],
                'mapped' => false,
                'required' => false,
                'help' => 'Laissez ce champ vide pour conserver le mot de passe actuel.',
                'constraints' => [
                    new Assert\Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit faire au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).+$/',
                        'message' => 'Le mot de passe doit contenir au moins une minuscule, une majuscule, un chiffre et un caractère spécial.',
                    ]),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
