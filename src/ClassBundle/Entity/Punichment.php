<?php

namespace ClassBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\PunichmentRepository")
 */
class Punichment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ClassBundle\Entity\Eleve", inversedBy="punichments")
     */
    private $Eleve;

    public function __toString()
    {
        return $this->getType();
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;
    /**
     * @ORM\Column(type="integer")
     */
    private $etat;

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function __construct()
    {
        $this->etat=0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEleve(): ?Eleve
    {
        return $this->Eleve;
    }

    public function setEleve(?Eleve $Eleve): self
    {
        $this->Eleve = $Eleve;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
