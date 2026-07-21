<?php

namespace App\Form\SectionForms;

use App\Entity\Section\LegalSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LegalSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => LegalSection::class,
        ]);
    }
}
