<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="todo_list")
  */
class TodoList
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue;
     * @ORM\Column(type="integer")
    */
    protected $id;

    /**
     * @var Task[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="todoList", orphanRemoval=true)
     * @ORM\OrderBy({"createdAt": "ASC"})
     */
     protected $tasks;

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
