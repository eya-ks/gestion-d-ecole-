<?php

namespace EventBundle\Controller;
use AppBundle\Entity\User;
use EventBundle\Entity\Club;
use EventBundle\Entity\Event;
use EventBundle\Entity\Participation;
use EventBundle\Entity\InscriptionClub;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $participations = $this->getDoctrine()->getManager()->getRepository(Participation::class)->findAll();
        $clubs = $this->getDoctrine()->getManager()->getRepository(Club::class)->findAll();
        $events = $this->getDoctrine()->getManager()->getRepository(Event::class)->findAll();
        $inscriptions = $this->getDoctrine()->getManager()->getRepository(InscriptionClub::class)->findBy(["stat"=>"unverified"]);
        return $this->render('@Event/Default/index.html.twig', array('formations' => $events , "nbre"=>count($events),"nbrp"=>count($participations),"nbrc"=>count($clubs), "nbri"=>count($inscriptions)));
   
        
    }
    public function afficheinscriptionsAction(){
        $users = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        $clubs = $this->getDoctrine()->getManager()->getRepository(Club::class)->findAll();
        $inscriptions = $this->getDoctrine()->getManager()->getRepository(InscriptionClub::class)->findBy(["stat"=>"unverified"]);
        return $this->render('@Event/Default/inscriptions.html.twig', array('inscriptions' => $inscriptions , "clubs"=>$clubs,"users"=>$users));
   
    }

    public function valideinscAction($id){
        $em = $this->getDoctrine()->getManager();
        $inscription = $this->getDoctrine()->getManager()->getRepository(InscriptionClub::class)->find($id);
        
        $inscription->setStat('verified');
        $em->flush();
       
        return $this->redirect('/event/afficheinscriptions');
    }

    public function refueinscAction($id){
        $em = $this->getDoctrine()->getManager();
        $inscription = $this->getDoctrine()->getManager()->getRepository(InscriptionClub::class)->find($id);
        
        $inscription->setStat('refused');
       
        $em->flush();
        return $this->redirect('/event/afficheinscriptions');
    }
    

}
