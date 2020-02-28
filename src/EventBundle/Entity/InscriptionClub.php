<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionClub
 *
 * @ORM\Table(name="inscription_club")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\InscriptionClubRepository")
 */
class InscriptionClub
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
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="idclub", type="integer")
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="stat", type="string", length=255)
     */
    private $stat;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iduser.
     *
     * @param int $iduser
     *
     * @return InscriptionClub
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser.
     *
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idclub.
     *
     * @param int $idclub
     *
     * @return InscriptionClub
     */
    public function setIdclub($idclub)
    {
        $this->idclub = $idclub;

        return $this;
    }

    /**
     * Get idclub.
     *
     * @return int
     */
    public function getIdclub()
    {
        return $this->idclub;
    }

    /**
     * Set stat.
     *
     * @param string $stat
     *
     * @return InscriptionClub
     */
    public function setStat($stat)
    {
        $this->stat = $stat;

        return $this;
    }

    /**
     * Get stat.
     *
     * @return string
     */
    public function getStat()
    {
        return $this->stat;
    }
}
