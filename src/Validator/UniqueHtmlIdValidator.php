<?php

namespace App\Validator;

use App\Entity\Section\Section;
use App\Service\HtmlIdChecker;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueHtmlIdValidator extends ConstraintValidator
{
    public function __construct(
        private HtmlIdChecker $checker,
    ) {
    }

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof UniqueHtmlId) {
            return;
        }

        if ($value === null || $value === '') {
            return;
        }

        /** @var Section $section */
        $section = $this->context->getObject();

        if (!$this->checker->isAvailable($value, $section)) {
            $this->context
                ->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}