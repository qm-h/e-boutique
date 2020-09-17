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
    public function index(SessionInterface $session)
    {
        $user = $this->getUser();
        // $role = $user->getRoles();


        if (!is_null($user)  /*&& $role[0] == "ROLE_ADMIN" */ ) {

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
          
        } else {
            $total = 0; 

            $panier = [];
        }
    } else {
        $this->addFlash(
            'demande',
            'Veuillez vous connecter pour accéder a votre panier'
        );
        return $this->redirectToRoute("app_homepage");
    }

        return $this->render('panier/index.html.twig', array(
            'panier' => $panier, 'total' => $total
        ));
    }


     /**
     * @Route("/modifpanier/{id}/{prix}/{action}", name="modif_panier")
     */
    public function ModifPanier($id, $prix,$action,SessionInterface $session,Request $request )
    {
        
        if ($session->get('panier')){
            $panier = $session->get('panier');
        }else{
            $panier = new Panier();
            $session->set('panier', $panier);
        }
       

        $panier->modifpanier($id, $prix, $action);

      
        $session->set('panier', $panier);
        
        $referer = $request->headers->get('referer');
    
        return $this->redirect($referer);
    }

    /**
     * @Route("/delete/{id}/{prix}", name="remove_all")
     */
    public function removeAll($id, $prix, SessionInterface $session)
    {
      
        $panier = $session->get('panier');
        $panier->modifpanier($id, $prix);
        $session->set('panier', $panier);
        

        return $this->redirectToRoute('app_panier');
    }
}