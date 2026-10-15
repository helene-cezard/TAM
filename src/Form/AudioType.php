<?php

namespace App\Form;

use App\Entity\Audio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AudioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title', TextType::class, [
            'label' => 'Titre',
            'required' => false
        ])
        ->add('uploadedAudio', FileType::class, [
            'label' => 'Choisissez un fichier audio',
            'mapped' => false, // Ne lie pas ce champ à l'entité
            'constraints' => [
                new Assert\File([
                    'maxSize' => '100M',
                    'mimeTypes' => [
                        'audio/mpeg',
                        'audio/mp3',
                        'audio/x-mpeg',
                    ],
                    'mimeTypesMessage' => 'Veuillez envoyer un fichier au format MP3',
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
            'data_class' => Audio::class,
        ]);
    }
}
