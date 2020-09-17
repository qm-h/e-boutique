<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Form\CreateArticleType;


class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function all()
    {
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findAll();

        $categorie = $this->getDoctrine()->getRepository(Categories::class)->findAll();
        return $this->render('articles/index.html.twig', array('articles' => $articles, 'categories' => $categorie,));
    }

    //categories
    /**
     * @Route("/article/{categorie}", name="categorie_article")
     */
    public function categorie($categorie)
    {
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy(['idcategorie' => $categorie]);

        /* dump($articles); */

        $categorie = $this->getDoctrine()->getRepository(Categories::class)->findAll();

        return $this->render('articles/index.html.twig', array('articles' => $articles, 'categories' => $categorie,));
    }
}