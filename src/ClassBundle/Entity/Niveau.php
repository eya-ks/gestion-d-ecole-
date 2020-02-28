<?php

namespace ClassBundle\Entity;

use ClassBundle\Entity\Eleve;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\NiveauRepository")
 */
class Niveau
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="ClassBundle\Entity\Eleve", mappedBy="niveau", cascade={"persist", "remove"})
     */
    private $Eleve;
    public function __construct()
    {
        $this->Eleve = new ArrayCollection();
    }

    /**
     * @return Collection|Eleve[]
     */
    public function getEleve(): Collection
    {
        return $this->Eleve;
    }

    public function addEleve(Eleve $eleve): self
    {
        if (!$this->Eleve->contains($eleve)) {
            $this->Eleve[] = $eleve;
            $eleve->setNiveau($this);
        }

        return $this;
    }

    public function removeEleve(Eleve $eleve): self
    {
        if ($this->Eleve->contains($eleve)) {
            $this->Eleve->removeElement($eleve);
            // set the owning side to null (unless already changed)
            if ($eleve->getNiveau() === $this) {
                $eleve->setNiveau(null);
            }
        }

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


    public function __toString()
    {
        return $this->getNom();
    }
}
