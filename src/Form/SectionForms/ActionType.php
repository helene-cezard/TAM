<?php

namespace App\Form\SectionForms;

use App\Entity\Section\Action;
use App\Form\SectionForms\SectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActionType extends SectionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class' => Action::class,
        ]);
    }
}

