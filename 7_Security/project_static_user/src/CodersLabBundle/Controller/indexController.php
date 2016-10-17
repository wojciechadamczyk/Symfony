<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class indexController extends Controller
{
    /**
     * @Route("all")
     * @Template()
     */
    public function allAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/restricted")
     * @Security("has_role('ROLE_ADMIN')")
     * @Template()
     */
    public function restrictedAction()
    {
        return array(
                // ...
            );    }

}
