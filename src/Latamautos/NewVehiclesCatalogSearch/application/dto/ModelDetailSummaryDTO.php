<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use JMS\Serializer\Annotation\Type;
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 12:31
 */
class ModelDetailSummaryDTO {

	/**
	 * @Type("string")
	 */
	public $brand;
	/**
	 * @Type("string")
	 */
	public $model;
	/**
	 * @Type("integer")
	 */
	public $modelId;
	/**
	 * @Type("integer")
	 */
	public $price;

	/**
	 * @Type("string")
	 */
	public $photo;

	/**
	 * @Type("integer")
	 */
	public $year;

	/**
	 * @Type("integer")
	 */
	public $countVersion;

	/**
	 * @Type("ArrayCollection<string>")
	 */
	public $subtypes;

	/**
	 * @Type("integer")
	 */
	public $currencyId;


	/**
	 * @return mixed
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * @param mixed $brand
	 */
	public function setBrand($brand) {
		$this->brand = $brand;
	}

	/**
	 * @return mixed
	 */
	public function getModel() {
		return $this->model;
	}

	/**
	 * @param mixed $model
	 */
	public function setModel($model) {
		$this->model = $model;
	}

	/**
	 * @return mixed
	 */
	public function getModelId() {
		return $this->modelId;
	}

	/**
	 * @param mixed $modelId
	 */
	public function setModelId($modelId) {
		$this->modelId = $modelId;
	}

	/**
	 * @return mixed
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * @param mixed $photo
	 */
	public function setPhoto($photo) {
		$this->photo = $photo;
	}

	/**
	 * @return mixed
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @param mixed $year
	 */
	public function setYear($year) {
		$this->year = $year;
	}

	/**
	 * @return mixed
	 */
	public function getCountVersion() {
		return $this->countVersion;
	}

	/**
	 * @param mixed $countVersion
	 */
	public function setCountVersion($countVersion) {
		$this->countVersion = $countVersion;
	}

	/**
	 * @return mixed
	 */
	public function getSubtypes() {
		return $this->subtypes;
	}

	/**
	 * @param mixed $subtypes
	 */
	public function setSubtypes($subtypes) {
		$this->subtypes = $subtypes;
	}

	/**
	 * @return mixed
	 */
	public function getCurrencyId() {
		return $this->currencyId;
	}

	/**
	 * @param mixed $currencyId
	 */
	public function setCurrencyId($currencyId) {
		$this->currencyId = $currencyId;
	}
}