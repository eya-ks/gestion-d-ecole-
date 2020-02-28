<?php

namespace ClassBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\TeacherRepository")
 */
class Teacher
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity="ClassBundle\Entity\Matier", mappedBy="teacher")
     */
    private $Mat;

    public function __construct()
    {
        $this->Mat = new ArrayCollection();
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
            $mat->setTeacher($this);
        }

        return $this;
    }

    public function removeMat(Matier $mat): self
    {
        if ($this->Mat->contains($mat)) {
            $this->Mat->removeElement($mat);
            // set the owning side to null (unless already changed)
            if ($mat->getTeacher() === $this) {
                $mat->setTeacher(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}
