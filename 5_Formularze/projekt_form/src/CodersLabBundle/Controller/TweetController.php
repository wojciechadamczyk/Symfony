<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CodersLabBundle\Entity\Tweet;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class TweetController extends Controller
{
    /**
     * @Route("/create")
     * @Template()
     */
    public function createAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/newTweet")
     * @Template()
     */
    public function newAction(Request $request){
        $task = new  Tweet();
        $form = $this->createFormBuilder($task)
                ->add('name', 'text')
                ->add('text', 'text')
                ->add('save', 'submit')
                ->getForm();
        
        
        if( $form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            var_dump($data);
            die('stop');
            $task = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            
            return array('form' => $form->createView());
        }
        

    /**
     * @Route("/showAll")
     * @Template()
     */
//    public function showAllAction()
//    {
//         }

}
}