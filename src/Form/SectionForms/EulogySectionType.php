<?php

namespace App\Form\SectionForms;

use App\Entity\Section\EulogySection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EulogySectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => EulogySection::class,
        ]);
    }
}
