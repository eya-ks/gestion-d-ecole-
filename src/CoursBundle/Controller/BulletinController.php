<?php

namespace CoursBundle\Controller;

use CoursBundle\Entity\Bulletin;
use CoursBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Bulletin controller.
 *
 * @Route("bulletin")
 */
class BulletinController extends Controller
{
    /**
     * Lists all bulletin entities.
     *
     * @Route("/", name="bulletin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em =$this->getDoctrine()->getManager();
        $bulletins = $em->getRepository('CoursBundle:Bulletin')->findAll();
        return $this->render('@Cours/note/displayResultat.html.twig',array(
            'bulletin' => $bulletins,
        ));
    }

    /**
     * Deletes pifinal note entity.
     *
     * @Route("/supprimer", name="bulletin_delete")
     * @Method("DELETE")
     */

    public function deleteBulletinAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bulletins=$em->getRepository(Bulletin::class)->findAll();
        $bulletins->remove();
        $em->flush();


    }
}
