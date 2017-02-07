<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Individual item held in the Todo list
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
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
     * @ORM\ManyToOne(targetEntity="TodoList", inversedBy="tasks")
     * @ORM\JoinColumn(name="todo_list_id", referencedColumnName="id")
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Task
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Task
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set todoList
     *
     * @param \AppBundle\Entity\TodoList $todoList
     *
     * @return Task
     */
    public function setTodoList(\AppBundle\Entity\TodoList $todoList = null)
    {
        $this->todoList = $todoList;

        return $this;
    }

    /**
     * Get todoList
     *
     * @return \AppBundle\Entity\TodoList
     */
    public function getTodoList()
    {
        return $this->todoList;
    }
}
