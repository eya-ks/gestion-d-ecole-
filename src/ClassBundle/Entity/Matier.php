<?php

namespace ClassBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\MatierRepository")
 */
class Matier
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMat", type="string", length=255)
     */
    public $nomMat;

    /**
     * @var float
     *
     * @ORM\Column(name="coefficient", type="float")
     */
    private $coefficient;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * Set nomMat
     *
     * @param string $nomMat
     *
     * @return Matiere
     */
    public function setNomMat($nomMat)
    {
        $this->nomMat = $nomMat;

        return $this;
    }

    /**
     * Get nomMat
     *
     * @return string
     */
    public function getNomMat()
    {
        return $this->nomMat;
    }

    /**
     * Set coefficient
     *
     * @param float $coefficient
     *
     * @return Matiere
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return float
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Matiere
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @ORM\ManyToOne(targetEntity="ClassBundle\Entity\Eleve", inversedBy="Mat")
     */
    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="ClassBundle\Entity\Teacher", inversedBy="Mat")
     */
    private $teacher;

    /**
     * @return mixed
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * @param mixed $eleve
     */
    public function setEleve($eleve)
    {
        $this->eleve = $eleve;
    }

    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }






}
