<?php

namespace CodersLabBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Pesel extends Constraint
{
    public $message = 'Pesel is not valid';
}