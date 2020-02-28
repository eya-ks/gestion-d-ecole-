<?php

namespace CommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamations
 *
 * @ORM\Table(name="reclamations", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class reclamation


{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;


    /**
     * @var string
     *
     * @ORM\Column(name="contenuReclamation", type="string", length=500, nullable=true)
     */
    private $contenureclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoiReclamation", type="date", nullable=true)
     */
    private $dateenvoireclamation;

    /**
     * @return string
     */
    public function getContenureclamation()
    {
        return $this->contenureclamation;
    }

    /**
     * @param string $contenureclamation
     */
    public function setContenureclamation($contenureclamation)
    {
        $this->contenureclamation = $contenureclamation;
    }

    /**
     * @return \DateTime
     */
    public function getDateenvoireclamation()
    {
        return $this->dateenvoireclamation;
    }

    /**
     * @param \DateTime $dateenvoireclamation
     */
    public function setDateenvoireclamation($dateenvoireclamation)
    {
        $this->dateenvoireclamation = $dateenvoireclamation;
    }

    /**
     * @return \DateTime
     */
    public function getDatereponsereclamation()
    {
        return $this->datereponsereclamation;
    }

    /**
     * @param \DateTime $datereponsereclamation
     */
    public function setDatereponsereclamation($datereponsereclamation)
    {
        $this->datereponsereclamation = $datereponsereclamation;
    }

    /**
     * @return int
     */
    public function getIdreclamation()
    {
        return $this->idreclamation;
    }

    /**
     * @param int $idreclamation
     */
    public function setIdreclamation($idreclamation)
    {
        $this->idreclamation = $idreclamation;
    }

    /**
     * @return \Users
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param \Users $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReponseReclamation", type="date", nullable=true)
     */
    private $datereponsereclamation;


    /**
     * @ORM\ManyToOne(targetEntity="CommBundle\Entity\Users")
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     */

    private $iduser;




}

