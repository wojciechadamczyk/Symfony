<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 06.08.16
 * Time: 15:37
 */

namespace CodersLabBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PeselValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value != '' && !$this->CheckPESEL($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                ->addViolation();
        }
    }

    /**
     * @link  http://phpedia.pl/wiki/Walidacja_numeru_PESEL
     * @param $str
     * @return bool
     */
    function CheckPESEL($str)
    {
        if (!preg_match('/^[0-9]{11}$/', $str)) //sprawdzamy czy ciąg ma 11 cyfr
        {
            return false;
        }

        $arrSteps = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3); // tablica z odpowiednimi wagami
        $intSum = 0;
        for ($i = 0; $i < 10; $i++) {
            $intSum += $arrSteps[$i] * $str[$i]; //mnożymy każdy ze znaków przez wagć i sumujemy wszystko
        }
        $int = 10 - $intSum % 10; //obliczamy sumć kontrolną
        $intControlNr = ($int == 10) ? 0 : $int;
        if ($intControlNr == $str[10]) //sprawdzamy czy taka sama suma kontrolna jest w ciągu
        {
            return true;
        }
        return false;
    }
}