<?php

namespace CodersLabBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CodersLabBundle\Entity\Autor;
use CodersLabBundle\Form\AutorType;
use Symfony\Component\Validator\Constraints\EqualTo;
//use Symfony\Component\Validator\Constraints\Lenght;
//use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;

/**
 * Autor controller.
 *
 * @Route("/autor")
 */
class AutorController extends Controller
{
    /**
     * @Route("/validateIn")
     */
    public function validateInAction (Request $request) {
    $intVaue = 'a';
    $notBlank = new NotBlant();
    $type = new Type( 'int');
    $greaterThan = new EqualTo(2);
    $length = new Length ( ['min' => 2]);
    $errors =
            $this->get('validator')
            ->validatevalue( $intValue, [$notBlank, $type, $greaterThan, $length]);
    dump ($errors);
    
    return new Response( 'validateInAction');
}
/**
 * @Route("/validateEmail")
 */
public function validateEmailAction (Request $request) {
    $email = 'emailToValidate@booking.yeah';
    $emailConstraint = new EmailConstraint();
    $errors = $this->get( 'validator' )->validateValue(
            $email,
            $emailConstraint
            );
    dump( $errors );
    
    return new Response( 'validateEmailAction' );
}

    /**
     * Lists all Autor entities.
     *
     * @Route("/", name="autor")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CodersLabBundle:Autor')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Autor entity.
     *
     * @Route("/", name="autor_create")
     * @Method("POST")
     * @Template("CodersLabBundle:Autor:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Autor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autor_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Autor entity.
     *
     * @param Autor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Autor $entity)
    {
        $form = $this->createForm(new AutorType(), $entity, array(
            'action' => $this->generateUrl('autor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Autor entity.
     *
     * @Route("/new", name="autor_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Autor();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Autor entity.
     *
     * @Route("/{id}", name="autor_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CodersLabBundle:Autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Autor entity.
     *
     * @Route("/{id}/edit", name="autor_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CodersLabBundle:Autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Autor entity.
    *
    * @param Autor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Autor $entity)
    {
        $form = $this->createForm(new AutorType(), $entity, array(
            'action' => $this->generateUrl('autor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Autor entity.
     *
     * @Route("/{id}", name="autor_update")
     * @Method("PUT")
     * @Template("CodersLabBundle:Autor:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CodersLabBundle:Autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autor_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Autor entity.
     *
     * @Route("/{id}", name="autor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CodersLabBundle:Autor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Autor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('autor'));
    }

    /**
     * Creates a form to delete a Autor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
