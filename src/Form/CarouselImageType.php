<?php

namespace App\Form;

use App\Entity\CarouselImage;
use App\Entity\GalleryImage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CarouselImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('galleryImage', EntityType::class, [
                'class' => GalleryImage::class,
                'label' => 'Ajouter une image de la galerie',
                'required' => false,
                'choice_label' => fn () => '',
                'expanded' => true, // Affiche les options sous forme de boutons radio
                'multiple' => false, // Permet de choisir une seule image
            ])
            ->add('uploadedImage', FileType::class, [
                'label' => 'Ou envoyer une image',
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image JPG, PNG ou WebP.',
                    ]),
                    new Assert\Image([
                        'minWidth' => 1200,
                        'minHeight' => 600,
                    ])
                ],
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
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter',
            ]);
        ;
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();

            /** @var CarouselImage $carouselImage */
            $carouselImage = $event->getData();

            $uploadedImage = $form->get('uploadedImage')->getData();

            if (!$uploadedImage && !$carouselImage->getGalleryImage()) {
                $form->addError(
                    new FormError(
                        'Veuillez sélectionner une image de la galerie ou envoyer une image.'
                    )
                );
            }
        });
    }

    public function validateAlt(?string $alt, ExecutionContextInterface $context): void
    {
        $form = $context->getRoot(); // Récupère le formulaire parent
        $uploadedImage = $form->get('uploadedImage')->getData();

        if ($uploadedImage && empty($alt)) {
            $context->buildViolation('Vous devez fournir un texte alternatif à l\'image.')
                ->atPath('alt') // Associe la violation au champ "alt"
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CarouselImage::class,
        ]);
    }
}
