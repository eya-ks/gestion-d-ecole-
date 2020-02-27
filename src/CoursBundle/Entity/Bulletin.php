<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bulletin
 *
 * @ORM\Table(name="bulletin")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\BulletinRepository")
 */
class Bulletin
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
     * @var float
     *
     * @ORM\Column(name="moyenne", type="float")
     */
    private $moyenne;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="string")
     */
    private $appreciation;

    /**
     * @return string
     */
    public function getAppreciation()
    {
        return $this->appreciation;
    }

    /**
     * @param string $appreciation
     */
    public function setAppreciation($appreciation)
    {
        $this->appreciation = $appreciation;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set moyenne
     *
     * @param float $moyenne
     *
     * @return Bulletin
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return float
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }
}

