<?php

namespace EventBundle\Repository;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends \Doctrine\ORM\EntityRepository
{


    public function findeventbyword($event){
        return $this->createQueryBuilder('e')
        ->where('e.nom_event LIKE :name')
        ->setParameter(':name', '%'.$event.'%')
        ->getQuery()
        ->execute();

    }
}
