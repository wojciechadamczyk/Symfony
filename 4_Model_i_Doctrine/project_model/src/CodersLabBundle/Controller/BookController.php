<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use CodersLabBundle\Entity\Book;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction() {
        $book = new Book();
        $book->setTitle('Title');
        $book->setDescription('Desc');
        $book->setRating(4.5);
        $em = $this->getDoctrine()->getManager();
        $em->persist($book);
        $em->flush();
        
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Book');
        $myBook = $repository->find( 2 );
        
        return ['book' => $book];
    }
    
    /**
     * @Route("/newBook")
     * @Template()
     */
    public function newBookAction() {
        $repo = $this->getDoctrine()->getRepository( 'CodersLabBundle:Author' );
        $authors = $repo->findAll();
        
        return [ 'authors' => $authors ];
    }
    
    /**
     * @Route("/createBook", name="createBook")
     * @Template()
     */
    public function createBookAction( Request $req) {
        $book = new Book();
        $book->setTitle( $req->request->get( 'title' ));
        $book->setDescription( $req->request->get( 'description' ));
        $book->setRating( $req->request->get( 'rating' ));
        
        $authorRepo = $this->getDoctrine()->getRepository('CodersLabBundle:Author');
        $author = $authorRepo->find( $req->request->get('author'));
        $book->setAuthor($author);
        
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($book);
        $em->flush();
        
        return ['book' => $book];
    }

    /**
     * @Route ("/showBook/{id}", name="showBook")
     * @Template()
     */
    public function showBookAction($id) {
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Book');
        $book = $repository->find($id);
        
        return ['book' => $book];
        
    }
    /**
     * @Route ("showAllBooks", name="showAllBooks")
     * @Template()
     */
    public function showAllBooksAction() {
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Book');
        $allBooks = $repository->findAll();
        
        return ["allBooks" => $allBooks];
    }
    /**
     * @Route ("deleteBooks/{id}, name ="deleteBook"
     * @Template()
     */
    public function deleteBookAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository("CodersLabBundle:Book")->find($id);
        
        if(!$book) {
            $result = "Nie ma książki o id $id";
        } else {
            $em->remove($book);
            $em->flush();
            $result = "Usunięto książkę o id $id";
        }
        
        return ["result" => $result];
    }
    
    public function idOverAction ($n) {
        $repo = $this->getDoctrine()->getRespository('CodersLabBundle:Book');
        $books = $repo->findAllWithIdOver($n);
        
        return [ 'books' => $books];
        }
}
