<?php

namespace App\Form\SectionForms;

use App\Entity\Section\HomeSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => HomeSection::class,
        ]);
    }
}
