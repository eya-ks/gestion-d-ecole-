<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\ParticipationRepository")
 */
class Participation
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
     * @var string
     *
     * @ORM\Column(name="idevent", type="integer")
     */
    private $idevent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdat", type="date")
     */
    private $createdat;


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
     * @return Participation
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
     * Set idevent.
     *
     * @param int $idevent
     *
     * @return Participation
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;

        return $this;
    }

    /**
     * Get idevent.
     *
     * @return int
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * Set createdat.
     *
     * @param \DateTime $createdat
     *
     * @return Participation
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat.
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }
}
