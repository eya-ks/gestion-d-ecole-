<?php

namespace CommBundle\Controller;

use CommBundle\Entity\contact;
use CommBundle\Form\contactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller
{
    public function readContactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cont = $em->getRepository('CommBundle:contact')
            ->findAll();

        $nbr=count($cont);


        return $this->render('@Comm/Contact/read_contact.html.twig',
            array('contact' => $cont,'nbr'=>$nbr));
        // .
    }

    public function addContactAction(Request $request)
    {  $c = new contact();
        $form = $this->createForm(contactType::class, $c);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            return $this->redirectToRoute('read_contact');
        }
        return $this->render('@Comm/Contact/add_contact.html.twig',
            array('form' => $form->createView()));

    }

    public function updateContactAction(Request $request, contact $c)
    {
        $form = $this->createForm(contactType::class, $c);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            // $em->persist($club); cela est inutile puisque l'objet
            //provient déjà de la BBd donc pas la peine de persist
            $em->flush();
            //on peut soit nraj3ou msg maktoub fih club modifié soit na3mlou
            // //redirection lel read nekhtarou wa7da menhom wena khtart redirection
            //return new Response('club modifié !');
            return $this->redirectToRoute('read_contact');
        }
        //on génère le HTML du formulaire créé
        //$formView =$form->createView();

        //on rend la vue
        return $this->render('@Comm/Contact/add_contact.html.twig',
            array('form' => $form->createView()));

    }

    public function deleteContactAction(contact $id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        return $this->redirectToRoute('read_contact');
    }




}
