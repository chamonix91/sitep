<?php

namespace ProjectSitep\DfinBundle\Controller;

use ProjectSitep\DfinBundle\Entity\Cheques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cheque controller.
 *
 */
class ChequesController extends Controller
{
    /**
     * Lists all cheque entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cheques = $em->getRepository('ProjectSitepDfinBundle:Cheques')->findAll();

        return $this->render('cheques/index.html.twig', array(
            'cheques' => $cheques,
        ));
    }

    /**
     * Creates a new cheque entity.
     *
     */
    public function newAction(Request $request)
    {
        $cheque = new Cheques();
        $form = $this->createForm('ProjectSitep\DfinBundle\Form\ChequesType', $cheque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cheque);
            $em->flush();

            return $this->redirectToRoute('cheques_show', array('id' => $cheque->getId()));
        }

        return $this->render('cheques/new.html.twig', array(
            'cheque' => $cheque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cheque entity.
     *
     */
    public function showAction(Cheques $cheque)
    {
        $deleteForm = $this->createDeleteForm($cheque);

        return $this->render('cheques/show.html.twig', array(
            'cheque' => $cheque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cheque entity.
     *
     */
    public function editAction(Request $request, Cheques $cheque)
    {
        $deleteForm = $this->createDeleteForm($cheque);
        $editForm = $this->createForm('ProjectSitep\DfinBundle\Form\ChequesType', $cheque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cheques_edit', array('id' => $cheque->getId()));
        }

        return $this->render('cheques/edit.html.twig', array(
            'cheque' => $cheque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cheque entity.
     *
     */
    public function deleteAction(Request $request, Cheques $cheque)
    {
        $form = $this->createDeleteForm($cheque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cheque);
            $em->flush();
        }

        return $this->redirectToRoute('cheques_index');
    }

    /**
     * Creates a form to delete a cheque entity.
     *
     * @param Cheques $cheque The cheque entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cheques $cheque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cheques_delete', array('id' => $cheque->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
