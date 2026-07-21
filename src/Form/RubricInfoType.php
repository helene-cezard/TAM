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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RubricInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre de l\'en-tête',
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 255,
                    ]),
                ],
            ])
            ->add('text', QuillType::class, [
                'label' => 'Texte de l\'en-tête',
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
            ->add('GalleryImage', EntityType::class, [
                'class' => GalleryImage::class,
                'label' => 'Choisir une image',
                'label_attr' => ['class' => 'sr-only'],
                'required' => false,
                'placeholder' => 'Aucune image', // Affiche un placeholder lorsque aucune image n'est sélectionnée
                'choice_label' => fn () => '',
                'expanded' => true, // Affiche les options sous forme de boutons radio
                'multiple' => false, // Permet de choisir une seule image
            ])
            ->add('uploadedImage', FileType::class, [
                'label' => 'Envoyer une image',
                'label_attr' => ['class' => 'sr-only'],
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG ou PNG).',
                    ]),
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
                'label' => 'Modifier',
            ]);
        ;
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
            'data_class' => RubricInfo::class,
        ]);
    }
}
