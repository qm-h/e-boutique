<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repository->findAll();
        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController', 'articles' => $articles,
        ]);
    }
}