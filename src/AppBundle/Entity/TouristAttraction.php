<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;



/**
 * TouristAttraction
 * 
 * @ORM\Table(name="tourist_attraction")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class TouristAttraction
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
     * @ORM\Column(name="contact_details", type="string")
     */
    private $contact_details;
    
    /**
     * @ORM\Column(name="website", type="string")
     */
    private $website;
    
    /**
     * @ORM\Column(name="opening_hours", type="string")
     */
    private $opening_hours;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="City", inversedBy="tourist_attractions")
     * @ORM\JoinColumn(name="tourist_attraction_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $city;
    
    /**
     * 
     * @ORM\ManyToMany(targetEntity="Tour", mappedBy="tourist_attractions")
     * 
     */
    private $tour; 
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="TouristAttractionImage", mappedBy="touristAttraction", cascade={"persist"})
     * 
     * 
     */
    private $images;
    
    
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
     * @return TouristAttraction
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
     * @return TouristAttraction
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
     * Set contactDetails
     *
     * @param string $contactDetails
     *
     * @return TouristAttraction
     */
    public function setContactDetails($contactDetails)
    {
        $this->contact_details = $contactDetails;

        return $this;
    }

    /**
     * Get contactDetails
     *
     * @return string
     */
    public function getContactDetails()
    {
        return $this->contact_details;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return TouristAttraction
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set openingHours
     *
     * @param string $openingHours
     *
     * @return TouristAttraction
     */
    public function setOpeningHours($openingHours)
    {
        $this->opening_hours = $openingHours;

        return $this;
    }

    /**
     * Get openingHours
     *
     * @return string
     */
    public function getOpeningHours()
    {
        return $this->opening_hours;
    }

    /**
     * Set city
     *
     * @param \AppBundle\Entity\City $city
     *
     * @return TouristAttraction
     */
    public function setCity(\AppBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \AppBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set tour
     *
     * @param \AppBundle\Entity\Tour $tour
     *
     * @return TouristAttraction
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tour = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tour
     *
     * @param \AppBundle\Entity\Tour $tour
     *
     * @return TouristAttraction
     */
    public function addTour(\AppBundle\Entity\Tour $tour)
    {
        $this->tour[] = $tour;

        return $this;
    }

    /**
     * Remove tour
     *
     * @param \AppBundle\Entity\Tour $tour
     */
    public function removeTour(\AppBundle\Entity\Tour $tour)
    {
        $this->tour->removeElement($tour);
    }

    /**
     * Add image
     *
     * @param \AppBundle\Entity\TouristAttractionImage $image
     *
     * @return TouristAttraction
     */
    public function addImage(\AppBundle\Entity\TouristAttractionImage $image)
    {
        $image->setTouristAttraction($this);
        
        $this->images->add($image);
    }

    /**
     * Remove image
     *
     * @param \AppBundle\Entity\TouristAttractionImage $image
     */
    public function removeImage(\AppBundle\Entity\TouristAttractionImage $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
