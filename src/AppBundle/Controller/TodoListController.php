<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\TodoListRepositoryInterface;

class TodoListController extends Controller
{
    /**
     * @Route("/", name="todoList.index")
     * @Method("GET")
     */
     public function indexAction()
     {
         $todoListRepository = $this->get('todo_list_respository');

         $todoLists = $todoListRepository->findAll();

         return $this->render('TodoList/index.html.twig', ['todoLists' => $todoLists]);
     }

     /**
      * @Route("/create", name="todoList.create")
      * @Method({"GET","POST"})
      */
      public function createAction(Request $request)
      {
          return $this->render('TodoList/create.html.twig');
      }
}
