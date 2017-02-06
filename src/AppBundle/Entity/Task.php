<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Individual item held in the Todo list
 *
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{

    /**
     * @var int
     *
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;


    /**
     * @var TodoList;
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TodoList")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $todoList;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=200)
     */
    protected $title;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    protected $updatedAt;
}
