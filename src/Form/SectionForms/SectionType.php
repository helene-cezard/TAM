<?php

namespace App\Form\SectionForms;

use Ehyiah\QuillJsBundle\DTO\Fields\BlockField\ListField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\BoldField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\ItalicField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\LinkField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\UnderlineField;
use Ehyiah\QuillJsBundle\DTO\Fields\InlineField\VideoField;
use Ehyiah\QuillJsBundle\DTO\QuillGroup;
use Ehyiah\QuillJsBundle\Form\QuillType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class SectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre',
                'required' => false,
            ])
            ->add('text', QuillType::class, [
                'label' => 'Texte',
                'required' => false,
                'quill_options' => [
                QuillGroup::build(
                    new BoldField(),
                    new ItalicField(),
                    new LinkField(),
                    new UnderlineField(),
                    new ListField(ListField::LIST_FIELD_OPTION_BULLET),
                    new VideoField(),
                ),
                ],
            ])
            ->add('aside', null, [
                'label' => 'Ajouter un bloc de citation',
                'required' => false,
                'empty_data' => null,
            ])
            ->add('left_side', null, [
                'label' => 'Afficher le bloc de citation à gauche',
            ])
            ->add('htmlId', TextType::class, [
                'label' => 'Identifiant HTML',
                'required' => false,
                'attr' => [
                    'placeholder' => 'ex. : qui-sommes-nous',
                ],
                'help' => 'Permet de créer un lien direct vers cette section (ex. : ajouter #qui-sommes-nous à la fin de l\'url comme dans https://monsite.fr/page#qui-sommes-nous). Les liens "Soin psychique", "Création artistique" et "Transculturalité" en page d\'accueil renvoient respectivement aux identifiants #soin-psychique, #creation-artistique et #transculturalite.',
                'constraints' => [
                    new Assert\Length([
                        'max' => 50,
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-z][a-z0-9_-]*$/',
                        'message' => 'Utilisez uniquement des lettres minuscules, des chiffres, des tirets et des underscores. L’identifiant doit commencer par une lettre.',
                    ]),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ]);
            $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                $form = $event->getForm();

                $title = $form->get('title')->getData();
                $text = $form->get('text')->getData();
                $aside = $form->get('aside')->getData();


                if (!$title && !$text && !$aside) {
                    $form->addError(
                        new FormError(
                            'Veuillez sélectionner entrer au moins un titre, un texte ou un bloc de citation.'
                        )
                    );
                }
            });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
