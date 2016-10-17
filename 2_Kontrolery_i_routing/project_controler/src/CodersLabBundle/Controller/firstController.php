<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response; // dodane do obsługi Response
use Symfony\Component\HttpFoundation\Cookie;

/**
 * @Route("/first")
 */


class firstController extends Controller
{
    /**
    * @Route("/goodbye/{username}")
    */
  public function GoodbyeAction($username) {
    return new Response("<html><body>Goodbye!" . "$username . </body></html>");
                      
}  
/**
 * @Route("/welcome/{name}{surname}")
 */    

    public function WelcomeAction($name, $surname) {
        return new Response("<html><body>Welcome " . "$name .  $surname . </body></html>");
    }
    /**
     * @Route("/showPost/{id}, requirements={"id"="\d+"})
     */
    public function ShowpostAction($id) {
        return new Response("<html><body>Showing Post " . "$id</body></html>");
    }
    /**
     * @Route("/form")
     * @Method("GET")
     */
    
    public function GETAction() {
        return new Response('<html><body>Wpisz coś i naciśnij enter<form method="post" action=""><input type="text" name = "inputstring"/></form><body></html>');
    }
    /**
     * @Route("/form")
     * @Method("POST")
     */
    public function POSTAction() {
    $inputstring = $request->request->get('inputstring');
    return new Response('<html><body><h3>Formularz przyjęty i wprowadzony napis to' . $inputstring . '</h3><body></html>');
    
}

/**
 * @Route("setSession/{value}")
 */

public function setSession(Request $request, $value) {
    $session = $request->getSession();
    $session->set('usertext', $value);
    return new Response();
}

/**
 * @Route("getSession")
 */

public function getSession(Request $request){
    $session = $request->getSession();
    $usertext = $session->get('usertext');
    return new Response($value);
}

/**
 * @Route("setCookie/{value}")
 */

public function setCookie() {
    $cookie = new Cookie("myCookie", $value, time() + (3600 * 48));
    $resp = new Response();
    $resp->headers->setCookie($cookie);
    return $resp;
}



}