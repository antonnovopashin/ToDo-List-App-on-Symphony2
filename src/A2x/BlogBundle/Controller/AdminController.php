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
 * @Route("/")
 */
class AdminController extends Controller
{
    /**
     * Lists all Todolist entities.
     *
     * @Route("/", name="admin_list_index")
     * @Method("GET")
     */
    public function indexAction()
    {


        $em = $this->getDoctrine()->getManager();

        $todolists = $em->getRepository('A2xBlogBundle:Todolist')->findAll();

        return $this->render('admin/index.html.twig', array(
            'todolists' => $todolists,
        ));
    }

    /**
     * Creates a new Todolist entity.
     *
     * @Route("/new", name="admin_list_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        $list = new Todolist();
        $list->setCreator($user -> getUsername());

        $form = $this->createForm('A2x\BlogBundle\Form\TodolistType', $list);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($list);
            $em->flush();

            return $this->redirectToRoute('admin_list_show', array('id' => $list->getId()));
        }

        return $this->render('admin/new.html.twig', array(
            'post' => $list,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a Todolist entity.
     *
     * @Route("admin/{id}", name="admin_list_show")
     * @Method("GET")
     */
    public function showAction(Todolist $post, $id)
    {
        $deleteForm = $this->createDeleteForm($post);

        $em = $this->getDoctrine()->getManager();
        $tasks = $em->getRepository('A2xBlogBundle:Task')->findBy( array('todolist' => $id) );

        return $this->render('admin/show.html.twig', array(
            'tasks' => $tasks,
            'post' => $post,
            'delete_form' => $deleteForm->createView(),
        ));
     

    }

    /**
     * Displays a form to edit an existing Todolist entity.
     *
     * @Route("/{id}/edit", name="admin_list_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Todolist $post)
    {
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('A2x\BlogBundle\Form\TodolistType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('admin_list_index', array('id' => $post->getId()));
        }

        return $this->render('admin/edit.html.twig', array(
            'post' => $post,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


        /**
     * Displays a form to  an existing .
     *
     * @Route("/{id}/{taskid}/edit", name="admin_edittask")
     * @Method({"GET", "POST"})
     */
    public function edittaskAction(Request $request, Task $task, $id, $taskid)
    {

        $deleteForm = $this->createDeleteTaskForm($task);
        $editForm = $this->createForm('A2x\BlogBundle\Form\TaskType', $task);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('admin_list_show', array('id' => $taskid)); #neznau pochemu, no eto rabotaet toka s taskid
        }

        return $this->render('admin/task/edit.html.twig', array(
            'id' => $taskid,
            'post' => $task,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));

    }

    /**
     * Displays a form to  an existing .
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

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('admin_list_show', array('id' => $id));
        }

        return $this->render('admin/task/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));

    }


    /**
     * Deletes a Todolist entity.
     *
     * @Route("adminn/delete/{id}", name="admin_list_delete")
     * @Method("DELETE")
     */
    private function deleteadminAction(Request $request, Todolist $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }

        return $this->redirectToRoute('admin_list_index');
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
            ->setAction($this->generateUrl('task_delete', array('id' => $task->getId(), 'taskid' => $task->getTodolist())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
