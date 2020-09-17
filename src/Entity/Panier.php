<?php

namespace App\Entity;


class Panier
{
   
    private $panier = [];

    
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

    public function modifpanier(int $id, float $prix, int $action = null)
    {
        

        if (func_num_args() == 3) {
            $this->total += ($prix * $action);
            if (!isset($this->panier[$id])) {
                //create a new line and add it if empty
                $this->panier[$id] = $action;
            } else {
                $this->panier[$id] += $action;
                if ($this->panier[$id] == 0) {
                    unset($this->panier[$id]);
                }
            }
        } else {
            $this->total -= ($prix * $this->panier[$id]);
            unset($this->panier[$id]);
        }

        
    }

}