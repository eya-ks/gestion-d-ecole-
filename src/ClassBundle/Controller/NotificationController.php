<?php

namespace ClassBundle\Controller;

use ClassBundle\Entity\Notification;
use ClassBundle\Repository\NotificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Notification controller.
 *
 * @Route("notification")
 */
class NotificationController extends Controller
{
    /**
     * @var NotificationRepository
     */
    private $notificationRepository;

    public function __construct()
    {
    }


    /**
     * @Route("/unread-count", name="notification_unread")
     */
    public function unreadCount()
    {
        $em = $this->getDoctrine()->getManager();
        $this->notificationRepository = $notifications = $em->getRepository('ClassBundle:Notification');
        return new JsonResponse([
            'count' => $this->notificationRepository->findUnseenByUser($this->getUser())
        ]);
    }

    /**
     * @Route("/all", name="notification_all")
     */
    public function notifications()
    {
        $em = $this->getDoctrine()->getManager();
        $this->notificationRepository = $notifications = $em->getRepository('ClassBundle:Notification');
        return $this->render('notification/notifications.html.twig', [
            'notifications' => $this->notificationRepository->findBy([
                'seen' => false,
                'user' => $this->getUser()
            ])
        ]);
    }

    /**
     * @Route("/acknowledge/{id}", name="notification_acknowledge")
     */
    public function acknowledge(Notification $notification)
    {
        $em = $this->getDoctrine()->getManager();
        $this->notificationRepository = $notifications = $em->getRepository('ClassBundle:Notification');
        $notification->setSeen(true);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('notification_all');
    }
/*
    /**
     * @Route("/acknowledge-all", name="notification_acknowledge_all")

    public function acknowledgeAll()
    {
        $em = $this->getDoctrine()->getManager();
        $this->notificationRepository = $notifications = $em->getRepository('ClassBundle:Notification');
        $this->notificationRepository->markAllAsReadByUser($this->getUser());
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('notification_all');
    }
*/
}
