<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\TouristAttraction;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * TouristAttraction controller.
 *
 */
class TouristAttractionController extends Controller
{
    /**
     * Lists all TouristAttraction entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $touristAttractions = $em->getRepository('AppBundle:TouristAttraction')->findAll();

        return $this->render('touristattraction/index.html.twig', array(
            'touristAttractions' => $touristAttractions,
        ));
    }

    /**
     * Creates a new TouristAttraction entity.
     *
     */
    public function newAction(Request $request)
    {
        $touristAttraction = new TouristAttraction();
        $form = $this->createForm('AppBundle\Form\TouristAttractionType', $touristAttraction);
        $form->add('submit', SubmitType::class, array(
            'label'=>'Create',
            'attr'=>array(
                'class'=>'btn btn-primary',
            ),
            'translation_domain'=>'AppBundle',
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($touristAttraction);
            $em->flush();

            return $this->redirectToRoute('touristattraction_show', array('id' => $touristAttraction->getId()));
        }

        return $this->render('touristattraction/new.html.twig', array(
            'touristAttraction' => $touristAttraction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TouristAttraction entity.
     *
     */
    public function showAction(TouristAttraction $touristAttraction)
    {
        $deleteForm = $this->createDeleteForm($touristAttraction);

        return $this->render('touristattraction/show.html.twig', array(
            'touristAttraction' => $touristAttraction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TouristAttraction entity.
     *
     */
    public function editAction(Request $request, TouristAttraction $touristAttraction)
    {
        $origImages = new ArrayCollection();
        
        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($touristAttraction->getImages() as $image) {
           $origImages->add($image);
        } 
        $deleteForm = $this->createDeleteForm($touristAttraction);
        $editForm = $this->createForm('AppBundle\Form\TouristAttractionType', $touristAttraction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach ($origImages as $image) {
                if (false === $touristAttraction->getImages()->contains($image)) {

                    $em->remove($image);
                }
            }
            $em->persist($touristAttraction);
            $em->flush();

            return $this->redirectToRoute('touristattraction_edit', array('id' => $touristAttraction->getId()));
        }

        return $this->render('touristattraction/edit.html.twig', array(
            'touristAttraction' => $touristAttraction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TouristAttraction entity.
     *
     */
    public function deleteAction(Request $request, TouristAttraction $touristAttraction)
    {
        $form = $this->createDeleteForm($touristAttraction);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($touristAttraction->getImages()){
                foreach ($touristAttraction->getImages() as $image) {
                    $em->remove($image);
                }   
            }
            $em->remove($touristAttraction);
            $em->flush();
        }

        return $this->redirectToRoute('touristattraction_index');
    }

    /**
     * Creates a form to delete a TouristAttraction entity.
     *
     * @param TouristAttraction $touristAttraction The TouristAttraction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TouristAttraction $touristAttraction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('touristattraction_delete', array('id' => $touristAttraction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
