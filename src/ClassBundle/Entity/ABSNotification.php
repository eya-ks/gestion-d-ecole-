<?php

namespace ClassBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\ABSNotificationRepository")
 */
class ABSNotification extends Notification
{
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
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * @param mixed $abs
     */
    public function setAbs($abs)
    {
        $this->abs = $abs;
    }
    /**
     * @ORM\ManyToOne(targetEntity="ClassBundle\Entity\Eleve")
     */
    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="ClassBundle\Entity\Eleve")
     */
    private $abs;

   
}
