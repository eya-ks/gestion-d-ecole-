<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\MatiereRepository")
 */
class Matiere
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMat", type="string")
     * @ORM\Id
     */
  public $idMat;

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
     * @return int
     */
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * @param int $idMat
     */
    public function setIdMat($idMat)
    {
        $this->idMat = $idMat;
    }

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
}

