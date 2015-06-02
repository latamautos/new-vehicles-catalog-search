<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 9:43
 */
class CatalogListDTO {

    public $type;
    public $subtype;
    public $brand;
    public $name;
    public $summary;
    public $versions;
    public $colors;
    public $medias;

	function __construct($type,ArrayCollection $subtype, $brand, $name, $summary,ArrayCollection $versions,ArrayCollection $colors,ArrayCollection $medias) {
		$this->type = $type;
		$this->subtype = $subtype;
		$this->brand = $brand;
		$this->name = $name;
		$this->summary = $summary;
		$this->versions = $versions;
		$this->colors = $colors;
		$this->medias = $medias;
	}

	/**
	 * @return mixed
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @return mixed
	 */
	public function getSubtype() {
		return $this->subtype;
	}

	/**
	 * @return mixed
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getSummary() {
		return $this->summary;
	}

	/**
	 * @return mixed
	 */
	public function getVersions() {
		return $this->versions;
	}

	/**
	 * @return mixed
	 */
	public function getColors() {
		return $this->colors;
	}

	/**
	 * @return mixed
	 */
	public function getMedias() {
		return $this->medias;
	}
}