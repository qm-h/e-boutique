<?php

namespace App\Controller;

use App\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommandesController extends AbstractController
{
    /**
     * @Route("/commandes", name="commandes")
     */
    public function index()
    {
        return $this->render('commandes/index.html.twig', [
            'controller_name' => 'CommandesController',
        ]);
    }
}
