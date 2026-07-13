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
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class GalleryImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($options['upload_image']) {
            $builder->add('uploadedImage', FileType::class, [
                'label' => 'Envoyer une image',
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                'constraints' => [
                    new Assert\File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG ou PNG).',
                    ]),
                ],
            ]);
        }
        $builder
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
                // 'mapped' => false, // Ne lie pas ce champ à l'entité
            ])
            ->add('category', EntityType::class, [
                'class' => ImageCategory::class,
                'label' => 'Choisir une catégorie. Laisser vide si vous voulez ajouter une image sur le serveur sans qu\'elle ne s\'affiche dans la gallerie.',
                'placeholder' => 'Aucune catégorie',
                'choice_label' => 'name',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();

            $uploadedImage = $form->has('uploadedImage')
                ? $form->get('uploadedImage')->getData()
                : null;

            $galleryImage = $event->getData();

            dump($uploadedImage);
            dump($galleryImage->getAlt());

            if ($uploadedImage && empty($galleryImage->getAlt())) {
                $form->get('alt')->addError(
                    new FormError('Veuillez renseigner un texte alternatif.')
                );
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GalleryImage::class,
            'upload_image' => true,
        ]);
    }
}
