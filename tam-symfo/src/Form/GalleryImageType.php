<?php

namespace App\Form;

use App\Entity\GalleryImage;
use App\Entity\ImageCategory;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class GalleryImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('path')
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
            ->add('alt', TextType::class, [
                'label' => 'Ajouter un texte alternatif à l\'image.',
                'attr' => [
                    'placeholder' => 'Ex : « Enfants qui peignent. »'
                ],
                'help' => 'Décrivez ce que montre l’image afin qu’une personne aveugle utilisant un lecteur d’écran puisse comprendre son contenu.',
                'help_attr' => [
                    'class' => 'help-alt-image',
                ],
                'required' => false,
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'constraints' => [
                    new Assert\Callback([$this, 'validateAlt']),
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => ImageCategory::class,
                'label' => 'Choisir une catégorie. Laisser vide si vous voulez ajouter une image sur le serveur sans qu\'elle ne s\'affiche dans la gallerie.',
                'placeholder' => 'Aucune catégorie',
                'choice_label' => 'name',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
    }

    public function validateAlt(?string $alt, ExecutionContextInterface $context): void
    {
        $form = $context->getRoot(); // Récupère le formulaire parent
        $uploadedImage = $form->get('uploadedImage')->getData();

        if ($uploadedImage && empty($alt)) {
            $context->buildViolation('Vous devez fournir un texte alternatif à l\image.')
                ->atPath('alt') // Associe la violation au champ "alt"
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GalleryImage::class,
        ]);
    }
}
