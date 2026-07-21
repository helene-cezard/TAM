<?php

namespace App\Form;

use App\Entity\Visual;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class VisualType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'required' => false,
                'constraints' => [
                    new Assert\Length(['max' => 255])
                ],
            ])
            ->add('description', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length(['max' => 255])
                ],
            ])
            ->add('uploadedVisual', FileType::class, [
                'label' => 'Envoyer un fichier',
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '20M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez envoyer une image (JPEG, PNG, WebP) ou un fichier PDF.',
                    ]),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();

            $uploadedVisual = $form->get('uploadedVisual')->getData();

            /** @var Visual $visual */
            $report = $event->getData();

            if (!$uploadedVisual && empty($report->getPath())) {
                $form->get('uploadedVisual')->addError(
                    new FormError('Veuillez sélectionner un visuel.')
                );
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visual::class,
        ]);
    }
}
