<?php

namespace CoursBundle\Repository;

use CoursBundle\Entity\Note;

/**
 * NoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NoteRepository extends \Doctrine\ORM\EntityRepository
{ public function calculMoy()
    {  $Query = $this->getEntityManager()->createQuery('SELECT avg(n.moyNot) FROM CoursBundle:Note n   ');
        return $Query->getSingleScalarResult();
     }

}
