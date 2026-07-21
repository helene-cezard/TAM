<?php

namespace App\Form\SectionForms;

use App\Entity\Section\ContactSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => ContactSection::class,
        ]);
    }
}
