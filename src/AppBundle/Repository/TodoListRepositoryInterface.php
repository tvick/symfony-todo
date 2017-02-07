<?php

namespace AppBundle\Repository;

interface TodoListRepositoryInterface
{
    /**
     * @return TodoLists[]
     */
    public function findAll();
}
