<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Categories;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\CreationArticleType;


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

    /**
     * @Route("/articles/creation", name="creation_article")
     */
    public function creation(Request $request , SessionInterface $session) 
    {
        $user = $this->getUser();
        $role = $user->getRoles();
        if (!is_null($user)  && $role[0] == "ROLE_ADMIN" ) {  
            $articles = new Articles();
            $form = $this->createForm(CreationArticleType::class, $articles);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                /* $file = $articles->getImagearticle(); */
                $file = $form['imagearticle']->getData();
                $extension = $file->guessExtension();
                if (!$extension) {
                    // extension cannot be guessed
                    $extension = 'jpg';
                }
                /* $directory = $this->getParameter('images_directory'); */
                $name = rand(1, 99999) . '.' . $extension;
                /* $file->move($directory, $name); */
                $articles = $form->getData();
                $articles->setImagearticle($name);
                $file->move($this->getParameter('images_directory'), $name);
                
                $doctrine = $this->getDoctrine()->getManager();
                $doctrine->persist($articles);
                $doctrine->flush();
                return $this->redirectToRoute('app_homepage');
            }
            return $this->render('articles/creation.html.twig', [
                'controller_name' => 'CreationArticleController', 'form' => $form->createView(),
            ]);
        } else {
            return $this->redirectToRoute('app_login'); 
        }
    }
}



