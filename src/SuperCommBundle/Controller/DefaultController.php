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

    public function servicesAction()
    {
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepository->findAll();

        return $this->render('@SuperComm/Default/services.html.twig', array(
            'products' => $products
        ));
    }

    public function expertsAction()
    {
        return $this->render('@SuperComm/Default/experts.html.twig');
    }

    public function blogAction()
    {
        $this->denyAccessUnlessGranted("ROLE_USER"); // impossible d'accéder au blog sans être connecté

        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $articleRepository->findAll();

        return $this->render('@SuperComm/Default/blog.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function articleDetailAction($id)  // récupération de l'id envoyé dans le chemin d'url
    {
        // pour récupérer les éléments  de la table article par rapport à son id grâce à la méthode find du Repo (méthode déjà définie par défaut)
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleRepository->find($id);

        return $this->render('@SuperComm/Default/ressource_detail.html.twig', array(
            'article' => $article
        ));
    }

    public function mentionsLegalesAction()
    {
        return $this->render('@SuperComm/Default/mentions_legales.html.twig');
    }

}
