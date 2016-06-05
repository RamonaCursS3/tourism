<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\TouristAttractionImage;
use AppBundle\Form\TouristAttractionImageType;

/**
 * TouristAttractionImage controller.
 *
 */
class TouristAttractionImageController extends Controller
{
    /**
     * Lists all TouristAttractionImage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $mapping = $this->getDoctrine()->getManager()->getClassMetadata('AppBundle:TouristAttractionImage');
        $columns = $mapping->getFieldNames();

        $touristAttractionImages = $em->getRepository('AppBundle:TouristAttractionImage')->findAll();

        return $this->render('touristattractionimage/index.html.twig', array(
            'touristAttractionImages' => $touristAttractionImages,
            'columns' => $columns,
        ));
    }

    /**
     * Creates a new TouristAttractionImage entity.
     *
     */
    public function newAction(Request $request)
    {
        $touristAttractionImage = new TouristAttractionImage();
        $form = $this->createForm('AppBundle\Form\TouristAttractionImageType', $touristAttractionImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($touristAttractionImage);
            $em->flush();

            return $this->redirectToRoute('touristattractionimage_show', array('id' => $touristAttractionImage->getId()));
        }

        return $this->render('touristattractionimage/new.html.twig', array(
            'touristAttractionImage' => $touristAttractionImage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TouristAttractionImage entity.
     *
     */
    public function showAction(TouristAttractionImage $touristAttractionImage)
    {
        $deleteForm = $this->createDeleteForm($touristAttractionImage);

        return $this->render('touristattractionimage/show.html.twig', array(
            'touristAttractionImage' => $touristAttractionImage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TouristAttractionImage entity.
     *
     */
    public function editAction(Request $request, TouristAttractionImage $touristAttractionImage)
    {
        $deleteForm = $this->createDeleteForm($touristAttractionImage);
        $editForm = $this->createForm('AppBundle\Form\TouristAttractionImageType', $touristAttractionImage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($touristAttractionImage);
            $em->flush();

            return $this->redirectToRoute('touristattractionimage_edit', array('id' => $touristAttractionImage->getId()));
        }

        return $this->render('touristattractionimage/edit.html.twig', array(
            'touristAttractionImage' => $touristAttractionImage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TouristAttractionImage entity.
     *
     */
    public function deleteAction(Request $request, TouristAttractionImage $touristAttractionImage)
    {
        $form = $this->createDeleteForm($touristAttractionImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($touristAttractionImage);
            $em->flush();
        }

        return $this->redirectToRoute('touristattractionimage_index');
    }

    /**
     * Creates a form to delete a TouristAttractionImage entity.
     *
     * @param TouristAttractionImage $touristAttractionImage The TouristAttractionImage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TouristAttractionImage $touristAttractionImage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('touristattractionimage_delete', array('id' => $touristAttractionImage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
