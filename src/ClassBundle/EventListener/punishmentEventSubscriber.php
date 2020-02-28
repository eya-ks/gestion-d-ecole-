<?php


namespace ClassBundle\EventListener;


use ClassBundle\Entity\Eleve;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Events;
use Doctrine\ORM\PersistentCollection;

class punishmentEventSubscriber implements EventSubscriber
{

    /**
     * @inheritDoc
     */
    public function getSubscribedEvents()
    {
        return [
            Events::onFlush
        ];
    }
    public function onFlush(OnFlushEventArgs $args){
        $em = $args->getEntityManager();
        $uow= $em->getUnitOfWork();
        /**
         * @var PersistentCollection $collectionUpdate
         */
        foreach ($uow->getScheduledCollectionUpdates() as $collectionUpdate) {
            if($collectionUpdate->getOwner() instanceof Eleve){
                continue;
            }
            if($collectionUpdate->getMapping()['fieldName']) {
               continue;
            }
            $insertDiff = $collectionUpdate->getInsertDiff();
            if (!count($insertDiff)){
                return;
            }
            $eleve = $collectionUpdate->getOwner();
        }
    }
}