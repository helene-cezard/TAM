<?php

namespace App\Form;

use App\Entity\HomeSection;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeSectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre de la section',
                'required' => false,
            ])
            ->add('text', null, [
                'label' => 'Contenu de la section',
                'required' => false,
            ])
            ->add('aside', null, [
                'label' => 'Ajouter un bloc de citation',
                'required' => false,
            ])
            ->add('left_side', null, [
                'label' => 'Afficher le bloc de citation à gauche',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter la section',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HomeSection::class,
        ]);
    }
}
