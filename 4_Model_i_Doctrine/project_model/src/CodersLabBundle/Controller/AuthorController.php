<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use CodersLabBundle\Entity\Author;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;

class AuthorController extends Controller
{
    /**
     * Route("/createAuthor", name="createAuthor")
     * @Template()
     */
    
    public function createAuthorAction(Request $req) {
        $author = new Author();
        $author->setNameSurname( $req->request->get( 'nameSurname' ));
        $author->setDescription( $req->request->get( 'description' ));
        $author->setId( $req->request->get( 'id' ));
        $em = $this->getDoctrine()->getManager();
        $em->persist($author);
        $em->flush();
        
        return $this->redirectToRoute( 'newAuthor');
    }
    
    /**
     * @Route ("/showAuthor/{id}", name="showAuthor")
     * @Template()
     */
    public function showAuthorAction($id) {
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Author');
        $author = $repository->find($id);
        
        return ['author' => $author];
}
/**
 * @Route ("showAllAuthor/{id}", name="showAllAuthor")
 * @Template()
 */
public function showAllAuthorsAction() {
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Author');
        $allAuthors = $repository->findAll();
        
        return ["allAuthors" => $allAuthors];




}
}