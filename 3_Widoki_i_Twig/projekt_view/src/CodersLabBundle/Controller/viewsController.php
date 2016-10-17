<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CodersLabBundle\Entity\Article;

class ViewsController extends Controller
{
   
//    //zadanie A3
//    /**
//     * @Route("/render")
//     * @Template()
//     */
//    public function renderAction() {
//        return $this->render("view_ex_a3.html.twig");
//    }
//    
//    //zadanie B1
//    /**
//     * @Route("/render/{username}")
//     * @Template()
//     */
//    public function usernameAction($username) {
//        return $this->render("view_ex_b1.html.twig", array("username" => $username));
//    }

    //zadanie B2
    /**
     * @Route("/render")
     * @Template()
     */
    public function view_ex_a3Action() {
        return [];
    }
    
    /**
     * @Route("/render/{username}")
     * @Template()
     */
    public function view_ex_b1Action($username) {
        return array("username" => $username);
    }
    
    //zadanie B3
    /**
     * @Route("/repeatSentence/{n}")
     * @Template()
     */
    public function repeatSentenceAction($n) {
        return array("n" => $n);
    }
    
    //zadanie B4
    /**
     * @Route("/createRandoms/{start}/{end}/{n}")
     * @Template()
     */
    public function createRandomsAction($start, $end, $n) {
        $randNums = [];
        
        for($i = 0; $i < $n; $i++) {
            $randNums[] = rand($start, $end);
        }
        
        return array("randNums" => $randNums);
    }
    
    //zadanie B5
    /**
     * @Route("/showArticle/{id}")
     * @Template()
     */
    public function showArticleAction($id) {

        $article = Article::GetArticlebyId($id);
        
        return array("art" => $article);
    }
    
    /**
     * @Route("/showAllArticles")
     * @Template()
     */
    public function showAllArticlesAction() {

        $articles = Article::GetAllArticles();
        
        return array("articles" => $articles);
    }
    
}