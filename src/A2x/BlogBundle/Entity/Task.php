<?php

namespace A2x\BlogBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="TaskRepository")
 * @ORM\Table(name="Task")
 * @ORM\HasLifecycleCallbacks
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user;

     /**
     * @ORM\Column(type="string", length=128)
     */
     protected $title;

     /**
      * @ORM\Column(type="string", length=255)
      */
      protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $done;

    /**
     * @ORM\ManyToOne(targetEntity="Todolist", inversedBy="tasks")
     * @ORM\JoinColumn(name="todolist_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $todolist;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;


    public function __construct()
    {
        $this->setCreated(new \DateTime());

        $this->setDone(false);
    }



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
     * Set user
     *
     * @param string $user
     * @return Task
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set title
     *
     * @param string $title
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
     * Set description
     *
     * @param string $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set done
     *
     * @param boolean $done
     * @return Task
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return boolean 
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Task
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set todolist
     *
     * @param \A2x\BlogBundle\Entity\Todolist $todolist
     * @return Task
     */
    public function setTodolist(\A2x\BlogBundle\Entity\Todolist $todolist = null)
    {
        $this->todolist = $todolist;

        return $this;
    }

    /**
     * Get todolist
     *
     * @return \A2x\BlogBundle\Entity\Todolist 
     */
    public function getTodolist()
    {
        return $this->todolist;
    }
}
