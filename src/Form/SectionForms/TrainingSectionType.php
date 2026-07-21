<?php

namespace App\Form\SectionForms;

use App\Entity\Section\TrainingSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrainingSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => TrainingSection::class,
        ]);
    }
}
