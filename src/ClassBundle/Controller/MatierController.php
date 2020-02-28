<?php

namespace ClassBundle\Controller;

use ClassBundle\Entity\Matier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Matier controller.
 *
 * @Route("matier")
 */
class MatierController extends Controller
{
    /**
     * Lists all matier entities.
     *
     * @Route("/", name="matier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matiers = $em->getRepository('ClassBundle:Matier')->findAll();

        return $this->render('matier/index.html.twig', array(
            'matiers' => $matiers,
        ));
    }

    /**
     * Creates a new matier entity.
     *
     * @Route("/new", name="matier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $matier = new Matier();
        $form = $this->createForm('ClassBundle\Form\MatierType', $matier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matier);
            $em->flush();

            return $this->redirectToRoute('matier_show', array('id' => $matier->getId()));
        }

        return $this->render('matier/new.html.twig', array(
            'matier' => $matier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a matier entity.
     *
     * @Route("/{id}", name="matier_show")
     * @Method("GET")
     */
    public function showAction(Matier $matier)
    {
        $deleteForm = $this->createDeleteForm($matier);

        return $this->render('matier/show.html.twig', array(
            'matier' => $matier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing matier entity.
     *
     * @Route("/{id}/edit", name="matier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Matier $matier)
    {
        $deleteForm = $this->createDeleteForm($matier);
        $editForm = $this->createForm('ClassBundle\Form\MatierType', $matier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matier_edit', array('id' => $matier->getId()));
        }

        return $this->render('matier/edit.html.twig', array(
            'matier' => $matier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a matier entity.
     *
     * @Route("/{id}", name="matier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Matier $matier)
    {
        $form = $this->createDeleteForm($matier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($matier);
            $em->flush();
        }

        return $this->redirectToRoute('matier_index');
    }

    /**
     * Creates a form to delete a matier entity.
     *
     * @param Matier $matier The matier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matier $matier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('matier_delete', array('id' => $matier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
