<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\Team;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\BoldField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\ItalicField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\UnderlineField;
use Ehyiah\QuillJsBundle\DTO\QuillGroup;
use Ehyiah\QuillJsBundle\Form\QuillType;
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
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
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
            ->add('presentation', QuillType::class, [
                'label' => 'Présentation',
                'required' => false,
                'quill_options' => [
                QuillGroup::build(
                    new BoldField(),
                    new ItalicField(),
                    new UnderlineField(),
                ),
                ],
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
