<?php

namespace App\Form\SectionForms;

use App\Entity\Section\BeninSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BeninSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => BeninSection::class,
        ]);
    }
}