<?php

namespace App\Form\SectionForms;

use App\Entity\Section\AssociationSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AssociationSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => AssociationSection::class,
        ]);
    }
}
