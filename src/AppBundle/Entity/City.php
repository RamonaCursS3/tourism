<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * City
 * 
 * @ORM\Table(name="city")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class City
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
     * @ORM\Column(name="location", type="string")
     */
    private $location;
    
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="TouristAttraction", mappedBy="city")
     *  
     */
    private $tourist_attractions;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    private $country;
    
    /**
     * 
     *
     * @ORM\ManyToMany(targetEntity="Hotel", mappedBy="cities")
     *
     */
    private $hotels;  
    
    /**
     * @ORM\OneToMany(targetEntity="Tour", mappedBy="cities")
     * 
     * 
     */
    private $tour; 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tourist_attractions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hotels = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return City
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
     * Set location
     *
     * @param string $location
     *
     * @return City
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add touristAttraction
     *
     * @param \AppBundle\Entity\TouristAttraction $touristAttraction
     *
     * @return City
     */
    public function addTouristAttraction(\AppBundle\Entity\TouristAttraction $touristAttraction)
    {
        $this->tourist_attractions[] = $touristAttraction;

        return $this;
    }

    /**
     * Remove touristAttraction
     *
     * @param \AppBundle\Entity\TouristAttraction $touristAttraction
     */
    public function removeTouristAttraction(\AppBundle\Entity\TouristAttraction $touristAttraction)
    {
        $this->tourist_attractions->removeElement($touristAttraction);
    }

    /**
     * Get touristAttractions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTouristAttractions()
    {
        return $this->tourist_attractions;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return City
     */
    public function setCountry(\AppBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add hotel
     *
     * @param \AppBundle\Entity\Hotel $hotel
     *
     * @return City
     */
    public function addHotel(\AppBundle\Entity\Hotel $hotel)
    {
        $this->hotels[] = $hotel;

        return $this;
    }

    /**
     * Remove hotel
     *
     * @param \AppBundle\Entity\Hotel $hotel
     */
    public function removeHotel(\AppBundle\Entity\Hotel $hotel)
    {
        $this->hotels->removeElement($hotel);
    }

    /**
     * Get hotels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHotels()
    {
        return $this->hotels;
    }

    /**
     * Set tour
     *
     * @param \AppBundle\Entity\Tour $tour
     *
     * @return City
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
