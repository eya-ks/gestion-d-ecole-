<?php

namespace ClassBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;
    /**
     * @ORM\Column(type="integer")
     */
    private $abs;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\OneToMany(targetEntity="ClassBundle\Entity\Punichment", mappedBy="Eleve")
     */
    private $punichments;

    /**
     * @ORM\OneToMany(targetEntity="ClassBundle\Entity\Matier", mappedBy="eleve")
     */
    private $Mat;


    /**
     * @ORM\ManyToOne(targetEntity="ClassBundle\Entity\Niveau", inversedBy="Eleve")
     */
    private $niveau;
    public function __construct()
    {
        $this->abs=0;
        $this->punichments = new ArrayCollection();
        $this->Mat = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * @param mixed $abs
     */
    public function setAbs($abs): void
    {
        $this->abs = $abs;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return Collection|Punichment[]
     */
    public function getPunichments(): Collection
    {
        return $this->punichments;
    }

    public function addPunichment(Punichment $punichment): self
    {
        if (!$this->punichments->contains($punichment)) {
            $this->punichments[] = $punichment;
            $punichment->setEleve($this);
        }

        return $this;
    }

    public function removePunichment(Punichment $punichment): self
    {
        if ($this->punichments->contains($punichment)) {
            $this->punichments->removeElement($punichment);
            // set the owning side to null (unless already changed)
            if ($punichment->getEleve() === $this) {
                $punichment->setEleve(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Matier[]
     */
    public function getMat(): Collection
    {
        return $this->Mat;
    }

    public function addMat(Matier $mat): self
    {
        if (!$this->Mat->contains($mat)) {
            $this->Mat[] = $mat;
            $mat->setEleve($this);
        }

        return $this;
    }

    public function removeMat(Matier $mat): self
    {
        if ($this->Mat->contains($mat)) {
            $this->Mat->removeElement($mat);
            // set the owning side to null (unless already changed)
            if ($mat->getEleve() === $this) {
                $mat->setEleve(null);
            }
        }

        return $this;
    }
    public function getNiveau(): ?Niveau
    {
        return $this->niveau;
    }

    public function setNiveau(?Niveau $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}
