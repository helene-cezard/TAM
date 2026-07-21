<?php

namespace App\Form\SectionForms;

use App\Entity\Section\ReportsSection;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportsSectionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'data_class' => ReportsSection::class,
        ]);
    }
}
