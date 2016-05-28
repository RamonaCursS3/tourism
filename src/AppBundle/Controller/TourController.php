<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Tour;
use AppBundle\Form\TourType;

/**
 * Tour controller.
 *
 */
class TourController extends Controller
{
    /**
     * Lists all Tour entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tours = $em->getRepository('AppBundle:Tour')->findAll();

        return $this->render('tour/index.html.twig', array(
            'tours' => $tours,
        ));
    }

    /**
     * Creates a new Tour entity.
     *
     */
    public function newAction(Request $request)
    {
        $tour = new Tour();
        $form = $this->createForm('AppBundle\Form\TourType', $tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();

            return $this->redirectToRoute('tour_show', array('id' => $tour->getId()));
        }

        return $this->render('tour/new.html.twig', array(
            'tour' => $tour,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tour entity.
     *
     */
    public function showAction(Tour $tour)
    {
        $deleteForm = $this->createDeleteForm($tour);

        return $this->render('tour/show.html.twig', array(
            'tour' => $tour,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tour entity.
     *
     */
    public function editAction(Request $request, Tour $tour)
    {
        $deleteForm = $this->createDeleteForm($tour);
        $editForm = $this->createForm('AppBundle\Form\TourType', $tour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();

            return $this->redirectToRoute('tour_edit', array('id' => $tour->getId()));
        }

        return $this->render('tour/edit.html.twig', array(
            'tour' => $tour,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tour entity.
     *
     */
    public function deleteAction(Request $request, Tour $tour)
    {
        $form = $this->createDeleteForm($tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tour);
            $em->flush();
        }

        return $this->redirectToRoute('tour_index');
    }

    /**
     * Creates a form to delete a Tour entity.
     *
     * @param Tour $tour The Tour entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tour $tour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tour_delete', array('id' => $tour->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
