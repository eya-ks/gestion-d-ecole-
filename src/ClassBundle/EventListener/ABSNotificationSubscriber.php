<?php

namespace ClassBundle\EventListener;

use ClassBundle\Entity\ABSNotification;
use ClassBundle\Entity\Eleve;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Events;
use Doctrine\ORM\PersistentCollection;

class ABSNotificationSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::onFlush,
        ];
    }

    public function onFlush(OnFlushEventArgs $args)
    {
        $em = $args->getEntityManager();
        $uow = $em->getUnitOfWork();

        /** @var PersistentCollection $collectionUpdate */
        foreach ($uow->getScheduledCollectionUpdates() as $collectionUpdate) {
            if (!$collectionUpdate->getOwner() instanceof Eleve) {
                continue;
            }

            if ('abs' !== $collectionUpdate->getMapping()['fieldName']) {
                continue;
            }

            $insertDiff = $collectionUpdate->getInsertDiff();

            if (!count($insertDiff)) {
                return;
            }

            /** @var Eleve $elve */
            $eleve = $collectionUpdate->getOwner();

            $notification = new ABSNotification();
            $notification->setEleve($eleve);

            $notification->setabs(reset($insertDiff));

            $em->persist($notification);

            $uow->computeChangeSet(
                $em->getClassMetadata(ABSNotification::class),
                $notification
            );
        }
    }
}
