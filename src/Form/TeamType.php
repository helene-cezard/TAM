<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($options['remove_image']) {
            $builder->add('removeImage', CheckboxType::class, [
                'label' => 'Retirer l’image actuelle (elle sera remplacée par l’image par défaut)',
                'mapped' => false,
                'required' => false,
            ]);
        }
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom complet',
                'required' => true,
            ])
            ->add('uploadedImage', FileType::class, [
                'label' => 'Envoyer une image',
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                // 'constraints' => [
                //     new Assert\File([
                //         'maxSize' => '10k',
                //         'mimeTypes' => [
                //             'image/jpeg',
                //             'image/png',
                //         ],
                //         'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG ou PNG).',
                //     ]),
                // ],
            ])
            // ->add('removeImage', CheckboxType::class, [
            //     'label' => 'Retirer l’image actuelle (elle sera remplacée par l’image par défaut)',
            //     'mapped' => false,
            //     'required' => false,
            // ])
            ->add('presentation', TextType::class, [
                'label' => 'Présentation',
                'required' => false,
            ])
            ->add('role', EntityType::class, [
                'class' => Role::class,
                'label' => 'Choisir un rôle.',
                'choice_label' => 'name',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
            'remove_image' => false, // Valeur par défaut pour l'option remove_image
        ]);
    }
}
