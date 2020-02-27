<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="")
     */
    public function indexAction(Request $request)
    {
       $authChecker = $this->container->get('security.authorization_checker');
       if($authChecker->isGranted('ROLE_ADMIN'))
       {
           return $this->render('default/index.html.twig');
       }
       else if ($authChecker->isGranted('ROLE_ENSEIGNANT'))
       {
           return $this->render('espaceEnseignant.html.twig');
       }
       else if ($authChecker->isGranted('ROLE_ELEVE'))
       {
           return $this->render('espaceEleve.html.twig');
       }
       else
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/homepage", name="displayHome")
     */
    public function displayAction()
    {
        return $this->render('home.html.twig');
    }
    /**
     * @Route("/EspaceUtilisateur", name="espaceuser")
     */
    public function displayEAction()
    {
        return $this->render('espace.html.twig');
    }

    }
