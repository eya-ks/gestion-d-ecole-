<?php


namespace ClassBundle\Event;



use ClassBundle\Entity\Eleve;
use Symfony\Component\EventDispatcher\Event;

class UserRegisterEvent extends Event
{
    const NAME = 'user.register';
    /**
     * @var Eleve
     */
    private $registeredUser;

    /**
     * @return Eleve
     */
    public function getRegisteredUser(): User
    {
        return $this->registeredUser;
    }

    /**
     * UserRegisterEvent constructor.
     * @param Eleve $registeredUser
     */
    public function __construct(Eleve $registeredUser)
    {

        $this->registeredUser = $registeredUser;
    }
}