<?php

namespace A2x\BlogBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="TodolistRepository")
 * @ORM\Table(name="Todolist")
 * @ORM\HasLifecycleCallbacks
 */
class Todolist
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
     protected $title;

     /**
     * @ORM\Column(type="string", length=128)
     */
     protected $creator;
    
     /**
      * @ORM\Column(type="string", length=255)
      */
      protected $description;

      /**
      * @ORM\OneToMany(targetEntity="Task", mappedBy="todolist")
      */
      protected $tasks;

      /**
       * @ORM\Column(type="datetime", nullable=true)
       */
       protected $created;



      public function __toString()
      {
      	return $this->title;
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
     * Set title
     *
     * @param string $title
     * @return Todolist
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
     * Set creator
     *
     * @param string $creator
     * @return Todolist
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return string 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Todolist
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
     * Set created
     *
     * @param \DateTime $created
     * @return Todolist
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
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setCreated(new \DateTime());
    }

    /**
     * Add tasks
     *
     * @param \A2x\BlogBundle\Entity\Task $tasks
     * @return Todolist
     */
    public function addTask(\A2x\BlogBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \A2x\BlogBundle\Entity\Task $tasks
     */
    public function removeTask(\A2x\BlogBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}
