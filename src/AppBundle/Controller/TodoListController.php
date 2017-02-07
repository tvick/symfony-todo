<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoListController extends Controller
{
    public function __construct()
    {

    }

    /**
     * @Route("/", name="TodoList.index")
     * @Method("GET")
     */
     public function indexAction()
     {
         $todoLists = [0 => (object)['name' => 'Tim']];
         return $this->render('TodoList/index.html.twig', ['todoLists' => $todoLists]);
     }
}
