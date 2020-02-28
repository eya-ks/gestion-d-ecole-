<?php

namespace ClassBundle\Controller;

use ClassBundle\Entity\Punichment;
use ClassBundle\Event\UserRegisterEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\HighchartsBundle\API\HighchartsChart;

/**
 * Punichment controller.
 *
 * @Route("punichment")
 */
class PunichmentController extends Controller
{
    /**
     * Displays a form to edit an existing punichment entity.
     *
     * @Route("/stats", name="stat")
     */
    public function statsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $eleves= $em->getRepository("ClassBundle:Punichment")->findByNombre();
        $nb_eleve = count($eleves);

        $eleves_punis= $em->getRepository("ClassBundle:Punichment")->findByPunis();


        $nb_eleve_present= (($eleves_punis/$nb_eleve)*100);

        $data = [["name" => "punis", "y" => $eleves_punis ], ["name" => "presents", "y" => $nb_eleve_present]];

        // Initialize the series.
        $series = [["colorByPoint" => true, "data" => $data, "name" => "Gender distribution"]];

        // Initialize the chart.
        $chart = new HighchartsChart;
        $chart->newChart()->setType("pie");
        $chart->newPlotOptions()->newPie()
            ->setAllowPointSelect(true)
            ->setCursor("pointer")
            ->setShowInLegend(true)
            ->newDataLabels()->setEnabled(true);
        $chart->setSeries($series);
        $chart->newTitle()->setText("Gender distribution");
        $chart->newTooltip()->setPointFormat("{series.name}: <b>{point.percentage:.1f}%</b>");

        return $this->render('stat.html.twig', [
            'chart' => $chart,
            'eleves' => $eleves
        ]);
    }
    /**
     * Lists all punichment entities.
     *
     * @Route("/", name="punichment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $punichments = $em->getRepository('ClassBundle:Punichment')->findAll();

        return $this->render('punichment/index.html.twig', array(
            'punichments' => $punichments,
        ));
    }

    /**
     * Creates a new punichment entity.
     *
     * @Route("/new", name="punichment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,EventDispatcherInterface $eventDispatcher,\Swift_Mailer $swift_Mailer)
    {
        $punichment = new Punichment();
        $form = $this->createForm('ClassBundle\Form\PunichmentType', $punichment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $punichmentev = new UserRegisterEvent($punichment->getEleve());
            $eventDispatcher->dispatch(
                UserRegisterEvent::NAME,
                $punichmentev
            );
            $em->persist($punichment);
            $em->flush();
            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('send@example.com')
                ->setTo('recipient@example.com')
                ->setBody(
                    $this->renderView(
                        'email/registration.html.twig',
                        ['eleve' => $punichment->getEleve()]
                    ),
                    'text/html'
                );
            $swift_Mailer->send($message);
            return $this->redirectToRoute('punichment_show', array('id' => $punichment->getId()));
        }

        return $this->render('punichment/new.html.twig', array(
            'punichment' => $punichment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a punichment entity.
     *
     * @Route("/{id}", name="punichment_show")
     * @Method("GET")
     */
    public function showAction(Punichment $punichment)
    {
        $deleteForm = $this->createDeleteForm($punichment);

        return $this->render('punichment/show.html.twig', array(
            'punichment' => $punichment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing punichment entity.
     *
     * @Route("/{id}/edit", name="punichment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Punichment $punichment)
    {
        $deleteForm = $this->createDeleteForm($punichment);
        $editForm = $this->createForm('ClassBundle\Form\PunichmentType', $punichment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('punichment_index', array('id' => $punichment->getId()));
        }

        return $this->render('punichment/edit.html.twig', array(
            'punichment' => $punichment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a punichment entity.
     *
     * @Route("/{id}", name="punichment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Punichment $punichment)
    {
        $form = $this->createDeleteForm($punichment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($punichment);
            $em->flush();
        }

        return $this->redirectToRoute('punichment_index');
    }

    /**
     * Creates a form to delete a punichment entity.
     *
     * @param Punichment $punichment The punichment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Punichment $punichment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('punichment_delete', array('id' => $punichment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
