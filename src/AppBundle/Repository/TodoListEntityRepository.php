<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * TodoListRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TodoListEntityRepository extends EntityRepository implements TodoListRepositoryInterface
{
    public function findAll()
    {
        return $this->getEntityManager()->createQuery('SELECT t FROM AppBundle:TodoList t ORDER BY t.createdAt')->getResult();
    }
}
