<?php

namespace ClassBundle\Repository;

use ClassBundle\Entity\Punichment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

class PunichmentRepository extends EntityRepository
{

    public function findByNombre(){
        $Query= $this->getEntityManager()->createQuery(
            "select count(p.id) from ClassBundle:Punichment  p where p.etat =:etat"
        )
            ->setParameter('etat',0);
            return $Query->getResult();
    }

    public function findByPunis(){
        $Query= $this->getEntityManager()->createQuery(
            "select count(p.id) from ClassBundle:Punichment p where p.Type LIKE :type"
        )
            ->setParameter('type','interdit');
        return $Query->getSingleScalarResult();
    }


}
