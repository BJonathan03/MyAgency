<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch {

    /**
     *
     * @var int|null
     */
    
    private $maxPrice;

    /**
     *
     * @var int|null
     * @Assert\Range(min=20, max=550)
     */
    private $minSurface;

    /**
     * Undocumented variable
     *
     * @var integer|null
     */
    private $distance;

    /**
     * Undocumented variable
     *
     * @var float|null
     */
    private $lat;

    /**
     * Undocumented variable
     *
     * @var float|null
     */
    private $lng;

    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $address;

    /**
     * Undocumented function
     *
     * @var ArrayCollection
     */
    private $options;

    public function __construct(){
        $this->options = new ArrayCollection();
    }

    /**
     *
     * @return integer|null
     */
	public function getMaxPrice(): ?int {
		return $this->maxPrice;
	}

    /**
     *
     * @param int|null $maxPrice
     * @return PropertySearch
     */
	public function setMaxPrice(int $maxPrice): PropertySearch {
        $this->maxPrice = $maxPrice;
        return $this;
	}

    /**
     * @return integer|null
     */
	public function getMinSurface(): ?int {
		return $this->minSurface;
	}

    /**
     *
     * @param int|null $minSurface
     * @return PropertySearch
     */
	public function setMinSurface(int $minSurface): PropertySearch {
        $this->minSurface = $minSurface;
        return $this;
    }
    
    /**
     *
     * @return ArrayCollection
     */
    public function getOptions() {
		return $this->options;
	}

    /**
     * @param ArrayCollection $options
     */
	public function setOptions(ArrayCollection $options) {
		$this->options = $options;
    }
    
    /**
     *
     * @return integer|null
     */
	public function getDistance(): ?int {
		return $this->distance;
	}

    /**
     *
     * @param int|null $distance
     * @return PropertySearch
     */
	public function setDistance(?int $distance): PropertySearch {
        $this->distance = $distance;
        return $this;
	}

    /**
     *
     * @return float|null
     */
	public function getLat(): ?float {
		return $this->lat;
	}

    /**
     *
     * @param float|null $lat
     * @return PropertySearch
     */
	public function setLat(?float $lat): PropertySearch {
        $this->lat = $lat;
        return $this;
	}
       /**
     *
     * @return float|null
     */
	public function getLng(): ?float {
		return $this->lng;
	}

    /**
     *
     * @param float|null $lng
     * @return PropertySearch
     */
	public function setLng(?float $lng): PropertySearch {
        $this->lng = $lng;
        return $this;
    }
    
    /*
    * @return string|null
    */

   public function getAddress(): ?string {
       return $this->address;
   }

   /**
    *
    * @param string|null $address
    * @return PropertySearch
    */
   public function setAddress(?string $address): PropertySearch {
       $this->address = $address;
       return $this;
   }


}