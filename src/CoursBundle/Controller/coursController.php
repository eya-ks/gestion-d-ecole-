<?php

namespace CoursBundle\Controller;

use CoursBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class coursController extends Controller
{
    /**
     * send pifinal note entity.
     *
     * @Route("/send/{idNote}", name="note_send")
     */
    public function sendMessageAction($idNote, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository('CoursBundle:Note')->find($idNote);
        $msg = new Message();
        $form = $this->createFormBuilder($msg)
            ->add ('content', TextAreaType::class)
            ->add ('send', SubmitType::class)

            ->getForm();

        $form->handleRequest($request);
        $user = $this->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('arijbenkhedher008@gmail.com')
                ->setTo($user->getEmailcanonical())
                ->setBody($msg->getContent()
                )
            ;

            $this->get('mailer')->send($message);

        }
        return $this->render("@Cours/note/form.html.twig",array('note'=> $note ,'form' => $form->createView() ));
    }

}
