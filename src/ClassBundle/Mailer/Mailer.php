<?php


namespace ClassBundle\Mailer;


use ClassBundle\Entity\Eleve;

class Mailer
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    /**
     * @var \Twig_Environment
     */
    private $twig;
    /**
     * @var string
     */
    private $mailFrom;

    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig,string $mailFrom)
    {
        $this->twig=$twig;
        $this->mailer=$mailer;
        $this->mailFrom = $mailFrom;
    }
    public  function sendConfirmationEmail(Eleve $eleve){
        $message =(new \Swift_Message())
            ->setSubject('You have been punished')
            ->setFrom("test@gmail.com")
            ->setTo($eleve->getEmail())
            ->setBody($this->twig->render('email/registration.html.twig',['Eleve'=>$eleve]),'text/html');
        $this->mailer->send($message);
    }
}