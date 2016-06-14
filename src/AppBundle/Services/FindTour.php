<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Country;


/**
 * Description of Syncronize
 *
 * @author catalin
 */
class FindTour {

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    
     
    /*
     * update our stocks
     * @var 
     */

    function findTourIn($country_name){
        $em = $this->em;
        $country = $em->getRepository('AppBundle:Country')->findOneByName($country_name);
        $country_to_search = $country->getId();
        $query = $em->createQuery(
            'SELECT t
            FROM AppBundle:Tour t
            WHERE t.country = :country
            ORDER BY t.name ASC'
        )->setParameter('country', $country_to_search);

        $tours = $query->getResult();
        //search into database tours table where country_id 
        //$tour = $em->getRepository('AppBundle:Country')->findByCountry($country_to_search);
        
        dump($tours);
    }
}
