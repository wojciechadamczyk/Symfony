<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CodersLabBundle\Entity\Autor;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
     /**
     * @Route("/validateInt")
     */
    public function validateIntAction (Request $request) {
    $intValue = 'a';
    $notBlank = new NotBlank();
    $type = new Type( 'int');
    $greaterThan = new EqualTo(2);
    $length = new Length ( ['min' => 2]);
    $errors =
            $this->get('validator')
            ->validatevalue( $intValue, [$notBlank, $type, $greaterThan, $length]);
    dump ($errors);
    
    return new Response( 'validateInAction');
}
/**
 * @Route("/validateEmail")
 */
public function validateEmailAction (Request $request) {
    $email = 'emailToValidate@booking.yeah';
    $emailConstraint = new EmailConstraint();
    $errors = $this->get( 'validator' )->validateValue(
            $email,
            $emailConstraint
            );
    dump( $errors );
    
    return new Response( 'validateEmailAction' );
}
}
