<?php

namespace SuperCommBundle\Controller;


use SuperCommBundle\Entity\Article;
use SuperCommBundle\Entity\Product;
use SuperCommBundle\Repository\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $articleRepository->findAll();
        return $this->render('@SuperComm/Default/index.html.twig', array(
            'articles' => $articles
        ));
    }

    public function conseilMinuteAction()
    {
        return $this->render('@SuperComm/Default/conseil_minute.html.twig');
    }

    public function offresAction()
    {
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepository->findAll();

        return $this->render('@SuperComm/Default/offres.html.twig', array(
            'products' => $products
        ));
    }

    public function expertsAction()
    {
        return $this->render('@SuperComm/Default/experts.html.twig');
    }

    public function ressourceDetailAction($categorie,$article)
    {
        return $this->render('@SuperComm/Default/ressource_detail.html.twig');
    }

    public function ressourcesAction($categorie)
    {
        return $this->render('@SuperComm/Default/ressources.html.twig');
    }

    public function blogAction()
    {
//        $this->denyAccessUnlessGranted("ROLE_ADMIN");

        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $articleRepository->findAll();

        //$categoryRepository = $this->getDoctrine()->getRepository(Category::class);
        //$categorys = $categoryRepository->findAll();

        return $this->render('@SuperComm/Default/blog.html.twig', array(
            'articles' => $articles,
          //  'categorys' => $categorys
        ));
    }

/*
    public function findArticleByCategoryAction($id)
    {

        $article = $this->getDoctrine()->getRepository(Article::class)->findByCategory($id);
        $category = $article->getCategory();

        return $this->render('@SuperComm/Default/blog_bis.html.twig', array(
            'article' => $article,
            'category' => $category
        ));

    }

*/


    public function mentionsLegalesAction()
    {
        return $this->render('@SuperComm/Default/mentions_legales.html.twig');
    }
}
