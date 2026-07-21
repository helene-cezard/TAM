<?php

namespace App\Form\SectionForms;

use App\Entity\Section\FranceSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FranceSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => FranceSection::class,
        ]);
    }
}
