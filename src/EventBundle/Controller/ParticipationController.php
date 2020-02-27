<?php

namespace EventBundle\Controller;

use AppBundle\Entity\User;
use EventBundle\Entity\Event;
use EventBundle\Entity\Participation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParticipationController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Event/Participation/index.html.twig');
    }

    public function partAction($id){
        return $this->render('@Event/Event/stripe.html.twig', ["id"=>$id]);
    }
    public function participerAction($id){
            $em = $this->getDoctrine()->getManager();

            $dejainsc = false;
            if (count($em->getRepository(Participation::class)->findby(["idevent"=>$id , "iduser"=>$this->getUser()->getId() ])) > 0 ){
                    $dejainsc = true;
            }


            $event = $em->getRepository(Event::class)->find($id);
            $nbrdispo = $event->getPlaceDispo();
            $nbrinsc = count($em->getRepository(Participation::class)->findby(["idevent"=>$id]));
            if ($dejainsc){
                //$formations = $this->getDoctrine()->getManager()->getRepository(Event::class)->findAll();
                //return $this->render('@Event/Event/navig.html.twig',["formations"=>$formations,'msg'=>"Vous etes deja participer a cette evenement"]);
                return $this->redirect('/event/navig');
            }else{
            if ($nbrdispo > $nbrinsc ){
                $participation = new Participation();
                $created_at = date("Y-m-d");
                $participation->setIduser($this->getUser()->getId());
                $participation->setIdevent($id);
                $participation->setCreatedat(new \DateTime($created_at));
    
                $em->persist($participation);
                $em->flush();
                //$formations = $this->getDoctrine()->getManager()->getRepository(Event::class)->findAll();
                //$formationspart = $this->getDoctrine()->getManager()->getRepository(Participation::class)->findBy(["iduser"=> $this->getUser()->getId()]);
       
                //return $this->render('@Event/Event/navig.html.twig',array('formations' => $formations , 'fparticipation'=> $formationspart ,'msg'=>"Vous etes participer A cette evenement" ));
                return $this->redirect('/event/navig');
                //return $this->render('@Event/Event/navig.html.twig',["formations"=>$formations,'msg'=>"Vous etes participer A cette evenement"]);
                
            }
        }

           


    }

}
