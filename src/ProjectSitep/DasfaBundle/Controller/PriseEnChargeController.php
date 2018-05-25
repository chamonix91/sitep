<?php

namespace ProjectSitep\DasfaBundle\Controller;

use ProjectSitep\DasfaBundle\Entity\PriseEnCharge;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Priseencharge controller.
 *
 */
class PriseEnChargeController extends Controller
{
    /**
     * Lists all priseEnCharge entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $priseEnCharges = $em->getRepository('ProjectSitepDasfaBundle:PriseEnCharge')->findAll();

        return $this->render('priseencharge/index.html.twig', array(
            'priseEnCharges' => $priseEnCharges,
        ));
    }

    /**
     * Creates a new priseEnCharge entity.
     *
     */
    public function newAction(Request $request)
    {
        $priseEnCharge = new Priseencharge();
        $form = $this->createForm('ProjectSitep\DasfaBundle\Form\PriseEnChargeType', $priseEnCharge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($priseEnCharge);
            $em->flush();

            return $this->redirectToRoute('pc_show', array('id' => $priseEnCharge->getId()));
        }

        return $this->render('priseencharge/new.html.twig', array(
            'priseEnCharge' => $priseEnCharge,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a priseEnCharge entity.
     *
     */
    public function showAction(PriseEnCharge $priseEnCharge)
    {
        $deleteForm = $this->createDeleteForm($priseEnCharge);

        return $this->render('priseencharge/show.html.twig', array(
            'priseEnCharge' => $priseEnCharge,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing priseEnCharge entity.
     *
     */
    public function editAction(Request $request, PriseEnCharge $priseEnCharge)
    {
        $deleteForm = $this->createDeleteForm($priseEnCharge);
        $editForm = $this->createForm('ProjectSitep\DasfaBundle\Form\PriseEnChargeType', $priseEnCharge);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pc_edit', array('id' => $priseEnCharge->getId()));
        }

        return $this->render('priseencharge/edit.html.twig', array(
            'priseEnCharge' => $priseEnCharge,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a list of usser "appué".
     *
     */
    public function appureListAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appure = $em->getRepository('ProjectSitepDasfaBundle:PriseEnCharge')->findBy(array('appure'=>'apuré'));

        return $this->render('priseencharge/appure.html.twig', array(
'priseEnCharges'=> $appure,
        ));
    }

    /**
     * Displays a list of usser "appué".
     *
     */
    public function nonAppureListAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appure = $em->getRepository('ProjectSitepDasfaBundle:PriseEnCharge')->findBy(array('appure'=>'non apuré'));

        return $this->render('priseencharge/nonappure.html.twig', array(
            'priseEnCharges'=> $appure,
        ));
    }


    /**
     * Deletes a priseEnCharge entity.
     *
     */
    public function deleteAction(Request $request, PriseEnCharge $priseEnCharge)
    {
        $form = $this->createDeleteForm($priseEnCharge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($priseEnCharge);
            $em->flush();
        }

        return $this->redirectToRoute('pc_index');
    }


    public function deletelinkAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProjectSitepDasfaBundle:PriseEnCharge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de trouver ce dossier.');
        }

        $em->remove($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('pc_index'));
    }

    /**
     * Creates a form to delete a priseEnCharge entity.
     *
     * @param PriseEnCharge $priseEnCharge The priseEnCharge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PriseEnCharge $priseEnCharge)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pc_delete', array('id' => $priseEnCharge->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
