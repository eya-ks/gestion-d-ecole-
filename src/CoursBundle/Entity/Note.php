<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\NoteRepository")
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idNote;
    /**
     * @var float
     *
     * @ORM\Column(name="ds", type="float")
     */
    protected $ds;
    /**
     * @var float
     *
     * @ORM\Column(name="cc", type="float")
     */
    protected $cc;
    /**
     * @var float
     *
     * @ORM\Column(name="examen", type="float")
     */
    protected $examen;

    /**
     * @var float
     *
     * @ORM\Column(name="coeffcc", type="float")
     */
    private $coeffCC;
    /**
     * @var float
     *
     * @ORM\Column(name="coeffDS", type="float")
     */
    private $coeffDS;
    /**
     * @var float
     *
     * @ORM\Column(name="coeffEX", type="float")
     */
    private $coeffEX;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne", type="float")
     */
    private $moyNot;
    /**
     * @return int
     */
    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     * @ORM\JoinColumn(name="matiere_id",referencedColumnName="idMat")
     */
    protected $matiere;

    /**
     * @return int
     */
    public function getIdNote()
    {
        return $this->idNote;
    }


    /**
     * @return float
     */
    public function getMoyNot()
    {
        return $this->moyNot;
    }



    /**
     * @param float $moyNot
     */
    public function setMoyNot($moyNot)
    {
        $this->moyNot = $moyNot;
    }
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * @param float $ds
     */
    public function setDs($ds)
    {
        $this->ds = $ds;
    }

    /**
     * @return float
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param float $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }

    /**
     * @return float
     */
    public function getExamen()
    {
        return $this->examen;
    }

    /**
     * @param float $examen
     */
    public function setExamen($examen)
    {
        $this->examen = $examen;
    }

    /**
     * @return float
     */
    public function getCoeffCC()
    {
        return $this->coeffCC;
    }

    /**
     * @param float $coeffCC
     */
    public function setCoeffCC($coeffCC)
    {
        $this->coeffCC = $coeffCC;
    }

    /**
     * @return float
     */
    public function getCoeffDS()
    {
        return $this->coeffDS;
    }

    /**
     * @param float $coeffDS
     */
    public function setCoeffDS($coeffDS)
    {
        $this->coeffDS = $coeffDS;
    }

    /**
     * @return float
     */
    public function getCoeffEX()
    {
        return $this->coeffEX;
    }

    /**
     * @param float $coeffEX
     */
    public function setCoeffEX($coeffEX)
    {
        $this->coeffEX = $coeffEX;
    }

    /**
     * @param int $idNote
     */
    public function setIdNote($idNote)
    {
        $this->idNote = $idNote;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
    /**
     * @param mixed $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }
}

