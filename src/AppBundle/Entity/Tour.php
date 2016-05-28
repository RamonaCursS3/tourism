<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Tour
 * 
 * @ORM\Table(name="tour")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class Tour
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
     * @ORM\Column(name="description", type="string")
     */
    private $description;
    
    /**
     * @ORM\Column(name="length", type="string")
     */
    private $length;
    
    /**
     * @ORM\Column(name="travel_type", type="string")
     */
    private $travel_type;
    
    /**
     * @ORM\OneToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     **/
    private $county;
    
    /**
     * 
     * @ORM\ManyToMany(targetEntity="City", inversedBy="tour")
     * 
     * 
     */
    private $cities;
    
    /**
     * @ORM\ManyToMany(targetEntity="Hotel", inversedBy="tour")
     * 
     * 
     */
    private $hotels;
    
    /**
     * 
     * 
     * @ORM\ManyToMany(targetEntity="TouristAttraction", inversedBy="tour")
     * 
     */
    private $tourist_attractions;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hotels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tourist_attractions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Tour
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
     * Set description
     *
     * @param string $description
     *
     * @return Tour
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return Tour
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set travelType
     *
     * @param string $travelType
     *
     * @return Tour
     */
    public function setTravelType($travelType)
    {
        $this->travel_type = $travelType;

        return $this;
    }

    /**
     * Get travelType
     *
     * @return string
     */
    public function getTravelType()
    {
        return $this->travel_type;
    }

    /**
     * Set county
     *
     * @param \AppBundle\Entity\Country $county
     *
     * @return Tour
     */
    public function setCounty(\AppBundle\Entity\Country $county = null)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Add city
     *
     * @param \AppBundle\Entity\City $city
     *
     * @return Tour
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
     * Add hotel
     *
     * @param \AppBundle\Entity\Hotel $hotel
     *
     * @return Tour
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
     * Add touristAttraction
     *
     * @param \AppBundle\Entity\TouristAttraction $touristAttraction
     *
     * @return Tour
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
     * Set cities
     *
     * @param \AppBundle\Entity\Tour $cities
     *
     * @return Tour
     */
    public function setCities(\AppBundle\Entity\Tour $cities = null)
    {
        $this->cities = $cities;

        return $this;
    }

    /**
     * Set hotels
     *
     * @param \AppBundle\Entity\Tour $hotels
     *
     * @return Tour
     */
    public function setHotels(\AppBundle\Entity\Tour $hotels = null)
    {
        $this->hotels = $hotels;

        return $this;
    }

    /**
     * Set touristAttractions
     *
     * @param \AppBundle\Entity\Tour $touristAttractions
     *
     * @return Tour
     */
    public function setTouristAttractions(\AppBundle\Entity\Tour $touristAttractions = null)
    {
        $this->tourist_attractions = $touristAttractions;

        return $this;
    }
}
