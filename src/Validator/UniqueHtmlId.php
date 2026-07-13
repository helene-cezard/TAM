<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class UniqueHtmlId extends Constraint
{
    public string $message = 'Cet identifiant HTML est déjà utilisé.';

    public function validatedBy(): string
    {
        return UniqueHtmlIdValidator::class;
    }
}
