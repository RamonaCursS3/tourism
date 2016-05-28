<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Hotel
 * 
 * @ORM\Table(name="hotel")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class Hotel
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="name", type="string")
    */
    private $name;
    
    /**
     * @ORM\Column(name="star_rating", type="integer")
    */
    private $star_rating;
    
    /**
     * @ORM\Column(name="price_range", type="string")
    */
    private $price_range;
    
    /**
     * 
     * @ORM\ManyToMany(targetEntity="City", inversedBy="hotels")
     * 
     */
    private $cities;
    
    /**
     * 
     * * @ORM\OneToMany(targetEntity="Tour", mappedBy="hotels")
     * 
     */
    private $tour;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->name;
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Hotel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set starRating
     *
     * @param integer $starRating
     *
     * @return Hotel
     */
    public function setStarRating($starRating)
    {
        $this->star_rating = $starRating;

        return $this;
    }

    /**
     * Get starRating
     *
     * @return integer
     */
    public function getStarRating()
    {
        return $this->star_rating;
    }

    /**
     * Set priceRange
     *
     * @param string $priceRange
     *
     * @return Hotel
     */
    public function setPriceRange($priceRange)
    {
        $this->price_range = $priceRange;

        return $this;
    }

    /**
     * Get priceRange
     *
     * @return string
     */
    public function getPriceRange()
    {
        return $this->price_range;
    }

    /**
     * Add city
     *
     * @param \AppBundle\Entity\City $city
     *
     * @return Hotel
     */
    public function addCity(\AppBundle\Entity\City $city)
    {
        $this->cities[] = $city;

        return $this;
    }

    /**
     * Remove city
     *
     * @param \AppBundle\Entity\City $city
     */
    public function removeCity(\AppBundle\Entity\City $city)
    {
        $this->cities->removeElement($city);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Set tour
     *
     * @param \AppBundle\Entity\Tour $tour
     *
     * @return Hotel
     */
    public function setTour(\AppBundle\Entity\Tour $tour = null)
    {
        $this->tour = $tour;

        return $this;
    }

    /**
     * Get tour
     *
     * @return \AppBundle\Entity\Tour
     */
    public function getTour()
    {
        return $this->tour;
    }
}
