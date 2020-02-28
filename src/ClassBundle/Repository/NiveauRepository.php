<?php

namespace ClassBundle\Repository;

use ClassBundle\Entity\Niveau;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

class NiveauRepository extends EntityRepository
{

    // /**
    //  * @return Niveau[] Returns an array of Niveau objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function updateEleve($id_niveau)
    {
        $this->createQueryBuilder('e')
        ->update('ClassBundle:Eleve' ,'e')
        ->set('u.status', 'banned')
        ->where();
        ;
    }
}
