<?php

namespace ClassBundle\Controller;

use ClassBundle\Entity\Niveau;
use ClassBundle\Repository\EleveRepository;
use Knp\Component\Pager\PaginatorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\HighchartsBundle\API\HighchartsChart;

/**
 * Niveau controller.
 *
 * @Route("niveau")
 */
class NiveauController extends Controller
{
    /**
     * Lists all niveau entities.
     *
     * @Route("/", name="niveau_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $paginator = $this->get('knp_paginator');
        $niveaus = $em->getRepository('ClassBundle:Niveau');
        $nivQ = $niveaus->createQueryBuilder('n')
            ->select('n.id,n.nom')
            ->getQuery();
        $pag = $paginator->paginate(
            $nivQ,
            $request->query->get('page',1),
            5
        );
        return $this->render('niveau/index.html.twig', array(
            'niveaus' => $pag,
        ));
    }

    /**
     * Creates a new niveau entity.
     *
     * @Route("/new", name="niveau_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, LoggerInterface $logger)
    {
        $niveau = new Niveau();
        $form = $this->createForm('ClassBundle\Form\NiveauType', $niveau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($niveau);
            $em->flush();
            foreach ($niveau->getEleve() as $item) {
                $RAW_QUERY = 'update eleve set niveau_id= :niveau where id= :id;';

                $statement = $em->getConnection()->prepare($RAW_QUERY);
                // Set parameters
                $statement->bindValue('niveau', 1);
                $statement->bindValue('id', $item->getId());
                $statement->execute();
            }
            return $this->redirectToRoute('niveau_show', array('id' => $niveau->getId()));
        }

        return $this->render('niveau/new.html.twig', array(
            'niveau' => $niveau,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a niveau entity.
     *
     * @Route("/{id}", name="niveau_show")
     * @Method("GET")
     */
    public function showAction(Niveau $niveau)
    {
        $deleteForm = $this->createDeleteForm($niveau);

        return $this->render('niveau/show.html.twig', array(
            'niveau' => $niveau,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing niveau entity.
     *
     * @Route("/{id}/edit", name="niveau_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Niveau $niveau)
    {
        $deleteForm = $this->createDeleteForm($niveau);
        $editForm = $this->createForm('ClassBundle\Form\NiveauType', $niveau);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach ($niveau->getEleve() as $item) {
                $RAW_QUERY = 'update eleve set niveau_id= :niveau where id= :id;';

                $statement = $em->getConnection()->prepare($RAW_QUERY);
                // Set parameters
                $statement->bindValue('niveau', 1);
                $statement->bindValue('id', $item->getId());
                $statement->execute();
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('niveau_show', array('id' => $niveau->getId()));
        }

        return $this->render('niveau/edit.html.twig', array(
            'niveau' => $niveau,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a niveau entity.
     *
     * @Route("/{id}", name="niveau_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Niveau $niveau)
    {
        $form = $this->createDeleteForm($niveau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($niveau);
            $em->flush();
        }

        return $this->redirectToRoute('niveau_index');
    }

    /**
     * Creates a form to delete a niveau entity.
     *
     * @param Niveau $niveau The niveau entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Niveau $niveau)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveau_delete', array('id' => $niveau->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }



}
