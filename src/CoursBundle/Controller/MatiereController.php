<?php

namespace CoursBundle\Controller;

use ClassBundle\Entity\Matier;
//use CoursBundle\Entity\Matiere;
//use CoursBundle\Form\MatiereType;
use ClassBundle\Form\MatierType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Matiere controller.
 *
 * @Route("matiere")
 */
class MatiereController extends Controller
{
    /**
     * Lists all matiere entities.
     *
     * @Route("/", name="matiere_index")
     * @Method("GET")
     */
    public function showMatAction()
    {
        $em = $this->getDoctrine();
        $tab = $em->getRepository(Matier::class)->findAll();
        return $this->render('@Cours/matiere/displayMat.html.twig', array('matieres' => $tab));
    }

    /**
     * Creates a new matiere entity.
     *
     * @Route("/new", name="matiere_new")
     * @Method({"GET", "POST"})
     */
    public function addMatAction(Request $request)
    {
        $matiere = new Matier();
        $form = $this->createForm(MatierType::class, $matiere, ['method' => 'post', 'action' => $this->generateUrl('matiere_new')]);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matiere);
            $em->flush();
            return $this->redirectToRoute('matiere_index');
        }
        return $this->render('@Cours/matiere/addMat.html.twig', array('form' => $form->createView()));
    }
    /*  /**
       * Finds and displays a matiere entity.
       *
       * @Route("/{idMat}", name="matiere_show")
       * @Method("GET")
       */


    /**
     * Displays a form to edit an existing matiere entity.
     *
     * @Route("/{id}", name="matiere_edit")
     * @Method({"GET", "POST"})
     */
    public function editMatAction(Request $request, $id)
    {
        $matiere  = new Matier();
        $em = $this->getDoctrine()->getManager();
        $matiere = $em->getRepository(Matier::class)->find($id);
        $form = $this->createForm(MatierType::class, $matiere);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('matiere_index');
        }

        return $this->render('@Cours/matiere/editMat.html.twig', array('form' => $form->createView()));
    }

    /**
     * Deletes a matiere entity.
     *
     * @Route("/{matiere}/", name="matiere_delete")
     * @Method("DELETE")
     */
    public function deleteMatAction(Request $request,Matier $matiere)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($matiere);
        $em->flush();
        return $this->redirectToRoute('matiere_index');
    }
    /**
     * tri a matiere entity.
     *
     * @Route("/matiere/liste", name="matiere_tri")
     * @Method({"GET", "POST"})
     */
    public function triMatAction()
    {
        $em = $this->getDoctrine()->getManager();
        $matiere=$em->getRepository(Matier::class)->tri();
        return $this->render('@Cours/matiere/displayMatTri.html.twig', array('matieres' => $matiere));
    }



}
