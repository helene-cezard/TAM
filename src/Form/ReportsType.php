<?php

namespace App\Form;

use App\Entity\Reports;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ReportsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('uploadedReport', FileType::class, [
                'label' => 'Charger le rapport',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '20M',
                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez envoyer un fichier PDF.',
                    ]),
                ],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description du rapport',
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 255,
                    ]),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();

            $uploadedReport = $form->get('uploadedReport')->getData();

            /** @var Reports $report */
            $report = $event->getData();

            if (!$uploadedReport && empty($report->getPath())) {
                $form->get('uploadedReport')->addError(
                    new FormError('Veuillez sélectionner un rapport PDF.')
                );
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reports::class,
        ]);
    }
}
