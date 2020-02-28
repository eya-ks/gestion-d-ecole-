<?php

namespace CommBundle\Controller;

use CommBundle\Entity\reclamation;
use CommBundle\Form\reclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommunicationController extends Controller
{
    public function readReclamationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository('CommBundle:reclamation')
            ->findAll();
        //$em = $this->getDoctrine()->getManager();

        $nbr=count($rec);

       // return $nbr;


        return $this->render('@Comm/Communication/read_reclamation.html.twig',
            array('reclamation' => $rec,'nbr'=>$nbr));
            // .
    }

    public function addReclmationAction(Request $request)
    {  $r = new reclamation();
        $form = $this->createForm(reclamationType::class, $r);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($r);
            $em->flush();
            return $this->redirectToRoute('read_reclamation');
        }
        return $this->render('@Comm/Communication/add_reclmation.html.twig',
            array('form' => $form->createView()));

    }

    public function updateReclamationAction(Request $request, reclamation $r)
    {
        $form = $this->createForm(reclamationType::class, $r);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            // $em->persist($club); cela est inutile puisque l'objet
            //provient déjà de la BBd donc pas la peine de persist
            $em->flush();
            //on peut soit nraj3ou msg maktoub fih club modifié soit na3mlou
            // //redirection lel read nekhtarou wa7da menhom wena khtart redirection
            //return new Response('club modifié !');
            return $this->redirectToRoute('read_reclamation');
        }
        //on génère le HTML du formulaire créé
        //$formView =$form->createView();

        //on rend la vue
        return $this->render('@Comm/Communication/add_reclmation.html.twig',
            array('form' => $form->createView()));

    }

    public function deleteReclamationAction(reclamation $id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        return $this->redirectToRoute('read_reclamation');
    }
    public function countReclamationAction(){
        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository('CommBundle:reclamation')
            ->findAll();
        $nbr=count($rec);
        return $nbr;

    }

}
