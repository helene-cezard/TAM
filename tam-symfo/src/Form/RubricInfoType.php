<?php

namespace App\Form;

use App\Entity\GalleryImage;
use App\Entity\RubricInfo;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\BoldField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\ItalicField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\LinkField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\UnderlineField;
use Ehyiah\QuillJsBundle\DTO\QuillGroup;
use Ehyiah\QuillJsBundle\Form\QuillType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RubricInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre de la section',
                'required' => false,
            ])
            ->add('text', QuillType::class, [
                'label' => 'Texte de la section',
                'required' => false,
                'quill_options' => [
                QuillGroup::build(
                    new BoldField(),
                    new ItalicField(),
                    new LinkField(),
                    new UnderlineField(),
                ),
                ],
            ])
            ->add('uploadedImage', FileType::class, [
                'label' => 'Télécharger une image',
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                // 'constraints' => [
                //     new Assert\File(
                //         maxSize: '1024k',
                //         extensions: ['pdf'],
                //         extensionsMessage: 'Please upload a valid PDF document',
                //     )
                // ],
            ])
            ->add('GalleryImage', EntityType::class, [
                'class' => GalleryImage::class,
                'label' => 'Choisir une image dans la galerie',
                'required' => false,
                'choice_label' => function ($galleryImage) {
                    return ' '; // Ne retourne rien pour masquer les ID
                },
                'choice_attr' => function ($galleryImage) {
                    return [
                        'data-image' => $galleryImage->getPath(), // Ajoute l'URL de l'image comme attribut HTML
                    ];
                },
                'expanded' => true, // Affiche les options sous forme de boutons radio
                'multiple' => false, // Permet de choisir une seule image
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Modifier',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RubricInfo::class,
        ]);
    }
}
