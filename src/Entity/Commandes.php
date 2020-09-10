<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="commandes")
 * @ORM\Entity
 */
class Commandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime", nullable=false)
     */
    private $datecommande;

    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $montant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Articles", inversedBy="idcommande")
     * @ORM\JoinTable(name="lignesdecommandes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCommande", referencedColumnName="idCommande")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idArticle", referencedColumnName="idArticle")
     *   }
     * )
     */
    private $idarticle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idarticle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdcommande(): ?int
    {
        return $this->idcommande;
    }

    public function getDatecommande(): ?\DateTimeInterface
    {
        return $this->datecommande;
    }

    public function setDatecommande(\DateTimeInterface $datecommande): self
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return Collection|Articles[]
     */
    public function getIdarticle(): Collection
    {
        return $this->idarticle;
    }

    public function addIdarticle(Articles $idarticle): self
    {
        if (!$this->idarticle->contains($idarticle)) {
            $this->idarticle[] = $idarticle;
        }

        return $this;
    }

    public function removeIdarticle(Articles $idarticle): self
    {
        if ($this->idarticle->contains($idarticle)) {
            $this->idarticle->removeElement($idarticle);
        }

        return $this;
    }

}
