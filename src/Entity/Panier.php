<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $panier = [];

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPanier(): ?array
    {
        return $this->panier;
    }

    public function setPanier(?array $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        
    
        $this->total = $total;

        return $this;
    }


    public function getCount(): ?int
    {
        $nbArticles = 0;
        foreach ($this->panier as $keys => $quantite) {
            $nbArticles += $quantite;
        }
        return $nbArticles;

        
    }

    public function add(int $id, float $prix)
    {
        
            
        if (isset($this->panier[$id])) {
            //create a new line and add it if empty
            $this->panier[$id]++;
        } else {
            $this->panier[$id] = 1;
        }
    
        $this->total +=  $prix;

        dump($this->total);

    }
   
}