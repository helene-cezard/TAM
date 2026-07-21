<?php

namespace App\Form\SectionForms;

use App\Entity\Section\ResourcesSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResourcesSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => ResourcesSection::class,
        ]);
    }
}
