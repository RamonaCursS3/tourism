<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\CsvFiles;
use AppBundle\Entity\Country;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * CsvFiles controller.
 *
 */
class CsvFilesController extends Controller
{
    /**
     * Lists all CsvFiles entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $csvFiles = $em->getRepository('AppBundle:CsvFiles')->findAll();

        return $this->render('csvfiles/index.html.twig', array(
            'csvFiles' => $csvFiles,
        ));
    }

    /**
     * Creates a new CsvFiles entity.
     *
     */
    public function newAction(Request $request)
    {

        $csvFile = new CsvFiles();
        $today = new \DateTime("now");   
        $csvFile->setDatCre($today);          
        $form = $this->createForm('AppBundle\Form\CsvFilesType', $csvFile);
        $form->add('submit', SubmitType::class, array(
            'label'=>'Create',
            'attr'=>array(
                'class'=>'btn btn-primary'
            ),
            'translation_domain'=>'AppBundle',
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($csvFile);
            $em->flush();
            return $this->redirectToRoute('csvfiles_index');
        }

        return $this->render('csvfiles/new.html.twig', array(
            'csvFile' => $csvFile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CsvFiles entity.
     *
     */
    public function showAction(CsvFiles $csvFile)
    {
        $deleteForm = $this->createDeleteForm($csvFile);

        return $this->render('csvfiles/show.html.twig', array(
            'csvFile' => $csvFile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CsvFiles entity.
     * @Template()
     */
    public function editAction(Request $request, CsvFiles $csvFile)
    {
        $deleteForm = $this->createDeleteForm($csvFile);
        $editForm = $this->createForm('AppBundle\Form\CsvFilesType', $csvFile);
        $editForm->add('submit', SubmitType::class, array(
            'label'=>'Edit',
            'attr'=>array(
                'class'=>'btn btn-success',
            ),
            'translation_domain'=>'AppBundle',
        ));

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $csvFile->upload();
            $em->persist($csvFile);
            $em->flush();

            return $this->redirectToRoute('csvfiles_show', array('id' => $csvFile->getId()));
        }

        return $this->render('csvfiles/edit.html.twig', array(
            'csvFile' => $csvFile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CsvFiles entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:CsvFiles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CsvFiles entity.');
            }
            
            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('csvfiles_index'));
    }

    /**
     * Creates a form to delete a CsvFiles entity.
     *
     * @param CsvFiles $csvFile The CsvFiles entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CsvFiles $csvFile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('csvfiles_delete', array('id' => $csvFile->getId())))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array(
                'label'=>'Delete',
                'attr'=>array(
                    'class'=>'btn btn-danger',
                ),
                'translation_domain'=>'AppBundle',
            ))
            ->getForm()
        ;
    }
    
    /**
     * Import CsvFiles entities from csv.
     *
     */
    public function importaAction(Request $request, $id, $tip)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:CsvFiles')->find($id);
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CsvFiles entity.');
            }
            
            $em->detach($entity);
            
            $erori = call_user_func(array($this, $tip.'Action'), $request, $entity);
            
            $entity->setIsUsed(true);
            
            $em->merge($entity);
            
            $em->flush();
            $em->clear();
            
            if($erori){
                $this->addFlash(
                'notice',
                $erori.'. Sunt probleme cu importul.');

            }
            
            return $this->redirect($this->generateUrl('csvfiles_index'));
                
    }    
    
  /**
     * Process entities from csv.
     *
     */
    public function countryCsvAction(Request $request, $csv)
    {
        $em = $this->getDoctrine()->getManager();        
        $my_file = $csv->getAbsolutePath(); 
        $myswitch = true;
        $wrong_csv_lines = '';
        $unique = array();
        
        if (($handle = fopen($my_file, "r")) !== FALSE) {
            while (($line = fgetcsv($handle,0,";")) !== FALSE) {   
                
                if(count($line)<=1) continue; 

                if ($myswitch) {
                    $myswitch=false;
                    continue;
                }               
                $line = array_map('trim', $line);
    
                if(!in_array($line[0], $unique)){                      
                    $unique[] = $line[0];                                       
                    $country = $em->getRepository('AppBundle:Country')->findOneBy(array('name'=>$line[0]));

                    if(!$country){                       
                        $country = new Country(); 
                        $country->setName($line[0]);                                             
                    }      
                                    
                    if(array_key_exists(1, $line))
                            $country->setLanguage($line[1]);
                    
                    if(array_key_exists(2, $line))
                        $country->setReligion($line[2]);
                   
                    $em->persist($country);                   
                }
            }
            
            fclose($handle);
        } else {
            return 'Fisierul csv nu poate fi deschis!';          
        }
        
        $em->flush();
        $em->clear(); 
        
        return $wrong_csv_lines;
    }       

}