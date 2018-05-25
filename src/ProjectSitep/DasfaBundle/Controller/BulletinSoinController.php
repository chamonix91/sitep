<?php

namespace ProjectSitep\DasfaBundle\Controller;

use ProjectSitep\DasfaBundle\Entity\BulletinSoin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bulletinsoin controller.
 *
 */
class BulletinSoinController extends Controller
{
    /**
     * Lists all bulletinSoin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bulletinSoins = $em->getRepository('ProjectSitepDasfaBundle:BulletinSoin')->findAll();

        return $this->render('bulletinsoin/index.html.twig', array(
            'bulletinSoins' => $bulletinSoins,
        ));
    }

    /**
     * Creates a new bulletinSoin entity.
     *
     */
    public function newAction(Request $request)
    {
        $bulletinSoin = new Bulletinsoin();
        $form = $this->createForm('ProjectSitep\DasfaBundle\Form\BulletinSoinType', $bulletinSoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bulletinSoin);
            $em->flush();

            return $this->redirectToRoute('bs_show', array('id' => $bulletinSoin->getId()));
        }

        return $this->render('bulletinsoin/new.html.twig', array(
            'bulletinSoin' => $bulletinSoin,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bulletinSoin entity.
     *
     */
    public function showAction(BulletinSoin $bulletinSoin)
    {
        $deleteForm = $this->createDeleteForm($bulletinSoin);

        return $this->render('bulletinsoin/show.html.twig', array(
            'bulletinSoin' => $bulletinSoin,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bulletinSoin entity.
     *
     */
    public function editAction(Request $request, BulletinSoin $bulletinSoin)
    {
        $deleteForm = $this->createDeleteForm($bulletinSoin);
        $editForm = $this->createForm('ProjectSitep\DasfaBundle\Form\BulletinSoinType', $bulletinSoin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bs_edit', array('id' => $bulletinSoin->getId()));
        }

        return $this->render('bulletinsoin/edit.html.twig', array(
            'bulletinSoin' => $bulletinSoin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bulletinSoin entity.
     *
     */
    public function deleteAction(Request $request, BulletinSoin $bulletinSoin)
    {
        $form = $this->createDeleteForm($bulletinSoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bulletinSoin);
            $em->flush();
        }

        return $this->redirectToRoute('bs_index');
    }

    /**
     * Creates a form to delete a bulletinSoin entity.
     *
     * @param BulletinSoin $bulletinSoin The bulletinSoin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(BulletinSoin $bulletinSoin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bs_delete', array('id' => $bulletinSoin->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
