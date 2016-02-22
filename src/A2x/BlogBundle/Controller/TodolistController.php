<?php

namespace A2x\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use A2x\BlogBundle\Entity\Todolist;
use A2x\BlogBundle\Entity\Task;
use A2x\BlogBundle\Form\TodolistType;
use A2x\BlogBundle\Form\TaskType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Todolist controller.
 *
 * @Route("/lists")
 */
class TodolistController extends Controller
{
    /**
     * Lists all Todolist entities.
     *
     * @Route("/", name="post_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $username =  $user -> getUsername();

        $em = $this->getDoctrine()->getManager();

        $todolists = $em->getRepository('A2xBlogBundle:Todolist')->findBy( array('creator' => $username) );

        return $this->render('list/index.html.twig', array(
            'todolists' => $todolists,
        ));
    }

    /**
     * Creates a new Todolist entity.
     *
     * @Route("/new", name="post_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        $post = new Todolist();
        $post->setCreator($user -> getUsername());

        $form = $this->createForm('A2x\BlogBundle\Form\TodolistType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('post_show', array('id' => $post->getId()));
        }

        return $this->render('list/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Todolist entity.
     *
     * @Route("/{id}", name="post_show")
     * @Method("GET")
     */
    public function showAction(Todolist $tdlist, $id)
    {
        $user = $this->getUser();
        $username =  $user -> getUsername();
        $listowner = $tdlist ->getCreator();
        
        if($username == $listowner)
        {
        $deleteForm = $this->createDeleteForm($tdlist);
        $em = $this->getDoctrine()->getManager();
        $tasks = $em->getRepository('A2xBlogBundle:Task')->findBy( array('todolist' => $id) );

        return $this->render('list/show.html.twig', array(
            'tasks' => $tasks,
            'post' => $tdlist,
            'delete_form' => $deleteForm->createView(),
        ));
        }
        else
        {
            $response = new Response('Access denied');
            return $response;
        }
    }

    /**
     * Displays a form to edit an existing Todolist entity.
     *
     * @Route("/{id}/edit", name="post_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Todolist $post)
    {
        $user = $this->getUser();
        $username =  $user -> getUsername();
        $listowner = $post ->getCreator();
        
        if($username == $listowner)
        {
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('A2x\BlogBundle\Form\TodolistType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('post_index', array('id' => $post->getId()));
        }

        return $this->render('list/edit.html.twig', array(
            'post' => $post,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        }
        else
        {
            $response = new Response('Access denied');
            return $response;
        }
    }

    /**
     * Edit task.
     *
     * @Route("/{id}/{taskid}/edit", name="edittask")
     * @Method({"GET", "POST"})
     */
    public function edittaskAction(Request $request, Task $task, $id, $taskid)
    {
        $user = $this->getUser();
        $username =  $user -> getUsername();
        $currentusername = $task ->getUser();
        
        if($username == $currentusername)
        {
        $deleteForm = $this->createDeleteTaskForm($task);
        $editForm = $this->createForm('A2x\BlogBundle\Form\TaskType', $task);
        $editForm->handleRequest($request);

        $user = $this->getUser();
        $task->setUser($user -> getUsername());
        
        if ($editForm->isSubmitted() && $editForm->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('post_show', array('id' => $taskid)); /*neznau pochemu, no eto rabotaet toka s taskid*/
        }

        return $this->render('task/edit.html.twig', array(
            'post' => $task,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'id' => $taskid, /*neznau pochemu, no eto rabotaet toka s taskid*/
        ));
        }
        else
        {
            $response = new Response('Access denied');
            return $response;
        }
    }


    /**
     * Creates a new task.
     *
     * @Route("/{id}/newtask", name="newtask")
     * @Method({"GET", "POST"})
     */
    public function newtaskAction(Request $request, Todolist $post, $id)
    {
        $user = $this->getUser();
        $task = new Task();
        $task->setUser($user -> getUsername());
        $task->setTodolist($post);
        $form = $this->createForm('A2x\BlogBundle\Form\TaskType', $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('post_show', array('id' => $id));
        }
        return $this->render('task/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }


    /**
     * Deletes a Todolist entity.
     *
     * @Route("/delete/{id}", name="list_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Todolist $list)
    {
        $form = $this->createDeleteForm($list);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($list);
            $em->flush();
        }
        return $this->redirectToRoute('post_index');
    }

    /**
     * Deletes a Task entity.
     *
     * @Route("/delete/{id}/{taskid}", name="task_delete")
     * @Method("DELETE")
     */
    public function deletetaskAction(Request $request, Task $task)
    {
        $form = $this->createDeleteTaskForm($task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($task);
            $em->flush();
        }
        return $this->redirectToRoute('post_index'); /*ne mogu perenapravit na 'post_show/{id}' potomu chto task->getTodolist() pochemu to vozvrashsaet title todolista a ne ego id*/
    }

    /**
     * Creates a form to delete a Todolist entity.
     *
     * @param Post $post The Post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Todolist $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('list_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    private function createDeleteTaskForm(Task $task)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('task_delete', array('id' => $task->getId(), 'taskid' => $task->getTodolist()))) /*znau 4to doljno bit naoborot*/
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
