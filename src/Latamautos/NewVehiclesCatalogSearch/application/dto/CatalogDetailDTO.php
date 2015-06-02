<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 9:44
 */
class CatalogDetailDTO {

	public $brand;
	public $model;
	public $priceFrom;
	public $countVersion;
	public $imageUrl;
	public $subtypes;

	function __construct($brand, $model, $priceFrom, $countVersion, $imageUrl,ArrayCollection $subtypes) {
		$this->brand = $brand;
		$this->model = $model;
		$this->priceFrom = $priceFrom;
		$this->countVersion = $countVersion;
		$this->imageUrl = $imageUrl;
		$this->subtypes = $subtypes;
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
	public function getModel() {
		return $this->model;
	}

	/**
	 * @return mixed
	 */
	public function getPriceFrom() {
		return $this->priceFrom;
	}

	/**
	 * @return mixed
	 */
	public function getCountVersion() {
		return $this->countVersion;
	}

	/**
	 * @return mixed
	 */
	public function getImageUrl() {
		return $this->imageUrl;
	}

	/**
	 * @return mixed
	 */
	public function getSubtypes() {
		return $this->subtypes;
	}
}