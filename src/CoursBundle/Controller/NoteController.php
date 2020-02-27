<?php

namespace CoursBundle\Controller;

use CoursBundle\Entity\Bulletin;
use CoursBundle\Entity\Matiere;
use CoursBundle\Entity\Note;
use CoursBundle\Form\NoteType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Note controller.
 *
 * @Route("note")
 */
class NoteController extends Controller
{  /**
 * Lists all note entities.
 *
 * @Route("/", name="note_index")
 * @Method("GET")
 */
    public function showNoteAction()
    {
        $em = $this->getDoctrine();
        $tab = $em->getRepository(Note::class)->findAll();
        return $this->render('@Cours/note/displayNote.html.twig', array('notes' => $tab));
    }
    /**
     * Creates pifinal new note entity.
     *
     * @Route("/new", name="note_new")
     * @Method({"GET", "POST"})
     */
    public function addNoteAction(Request $request)
    {
        $note = new Note();
        $form = $this->createForm(NoteType::class,$note,['method'=>'post','action'=>$this->generateUrl('note_new')]);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $note->setCoeffCC(1);
            $note->setCoeffDS(1);
            $note->setCoeffEX(2);
            $ds=$note->getDs();
            $cc=$note->getCc();
            $examen=$note->getExamen();
            $coeffcc=$note->getCoeffCC();
            $coeffds=$note->getCoeffDS();
            $coeffex=$note->getCoeffEX();
            $moy=(($ds*$coeffds)+($cc*$coeffcc)+($examen*$coeffex))/($coeffcc+$coeffex+$coeffds);
            $note->setMoyNot($moy);
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute('note_index');
        }
        return $this->render('@Cours/note/addNote.html.twig', array('form' => $form->createView()));
    }
    /**
     * Displays pifinal form to edit an existing note entity.
     *
     * @Route("/{idNote}/edit", name="note_edit")
     * @Method({"GET", "POST"})
     */
    public function editNoteAction(Request $request,$idNote)
    {
        $note= new Note();
        $em=$this->getDoctrine()->getManager();
        $note=$em->getRepository(Note::class)->find($idNote);
        $form=$this->createForm(NoteType::class,$note);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {
            $ds=$note->getDs();
            $cc=$note->getCc();
            $examen=$note->getExamen();
            $coeffcc=$note->getCoeffCC();
            $coeffds=$note->getCoeffDS();
            $coeffex=$note->getCoeffEX();
            $moy=(($ds*$coeffds)+($cc*$coeffcc)+($examen*$coeffex))/($coeffcc+$coeffex+$coeffds);
            $note->setMoyNot($moy);
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('note_index');
        }

        return $this->render('@Cours/note/editNote.html.twig', array('form' => $form->createView()));
    }
    /**
     * Deletes pifinal note entity.
     *
     * @Route("/{note}", name="note_delete")
     * @Method("DELETE")
     */

    public function deleteNoteAction(Request $request,Note $note)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($note);
        $em->flush();
        return $this->redirectToRoute('note_index');

    }

    /**
     *resultat
     *
     * @Route("/resultat/bulletin", name="note_resu")
     * @Method({"GET", "POST"})
     */
    public function ResultatAction()
    {
        $em = $this->getDoctrine();
        $bulletin=new Bulletin();
        $emm = $this->getDoctrine()->getManager();
        $dm=$this->getDoctrine()->getManager();
        $resultat=$em->getRepository(Note::class)->calculMoy();
        $moyenne=$bulletin->setMoyenne($resultat);
        if ($resultat<10)
           {
            $bulletin->setAppreciation("refus");
            }
        else if (($resultat>=10) && ($resultat<12))
        {
            $bulletin->setAppreciation("passable");
        }
        else if (($resultat>=12) && ($resultat<15))
        {
            $bulletin->setAppreciation("assez bien avec encouragement");
        }
        else if (($resultat>=15) && ($resultat<16))
        {
            $bulletin->setAppreciation("bien");
        }
        else if (($resultat>=16) && ($resultat<20))
        {
            $bulletin->setAppreciation("excellent");
        }
        $resultats=$dm->getRepository(Bulletin::class)->remove();
        $dm->flush();
        $emm->persist($bulletin);
        $emm->flush();
        $bulletins=$em->getRepository(Bulletin::class)->findAll();
        return $this->render('@Cours/note/displayResultat.html.twig',array(
            'bulletin' => $bulletins,
        ));
    }
    /**
     * send pifinal note entity.
     *
     * @Route("/send/email", name="note_send")
     */
    public function sendMessageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository('CoursBundle:Note')->findAll();
        $msg = new \CoursBundle\Entity\Message();
        $form = $this->createFormBuilder($msg)
            ->add ('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $message = (new \Swift_Message('resultat'))
                ->setFrom('eylinebk1999@gmail.com')
                ->setTo($user->getEmailcanonical())
                ->setBody($this->renderView(
                    '@Cours/note/displayNoteEmail.html.twig',
                    array('note' => $note)))
            ;

            $this->get('mailer')->send($message);
            $this->redirectToRoute('note_index');

        }
        return $this->render("@Cours/note/form.html.twig",array('note'=> $note ,'form' => $form->createView()));
    }


    }
