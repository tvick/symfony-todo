<?php

namespace AppBundle\Repository;

interface TodoListRepositoryInterface
{
    //returns array of all todo list objects
    public function findAll();
}
