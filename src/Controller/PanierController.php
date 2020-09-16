<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Panier;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="app_panier")
     */
    public function index()
    {
        $session = new Session();
        
        if ($session->get('panier')) {

            $keys = array_keys(
                $session->get('panier')
                    ->getPanier()
            );

           /*  dump($keys); */

            $panier = $this->getDoctrine()
                ->getRepository(Articles::class)
                ->findByArticles($keys);

               
                $total = 0; 

                if ($session->get('panier')) {

                $total = $session->get('panier')->getTotal();
                
                }
           dump($total);
        } else {
            $total = 0; 

            $panier = [];
        }

        return $this->render('panier/index.html.twig', array(
            'panier' => $panier, 'total' => $total
        ));
    }



    /** 
     * @Route("/panier/add", name="add_panier")
     */
    public function add(Request $request, SessionInterface $session)
    {
        //$session->clear();


        if ($session->get('panier')) {
            $panier = $session->get('panier');
        } else {
            $panier = new Panier();
        }
        $panier->add($request->request->get('idarticle'), $request->request->get('prixarticle'));
        
        $session->set('panier', $panier);

        //dump($panier); 
        return $this->redirectToRoute("app_homepage");
    }

    /** 
     * @Route("/panier/remove/{id}/{prix}", name="cart_remove")
     */
    public function remove($id, $prix,SessionInterface $session)
    {

        $panier = $session->get('panier');
        

        $session->set('panier', $panier);

        return $this->redirectToRoute("app_panier");
    }
}