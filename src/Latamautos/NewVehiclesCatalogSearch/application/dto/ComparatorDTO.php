<?php

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use Latamautos\MicroserviceGateway\core\ArrayCollection;
use JMS\Serializer\Annotation\Type;
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:49
 */
class ComparatorDTO {

	/**
	 * @Type("string")
	 */
	public $brandName;
	/**
	 * @Type("string")
	 */
	public $modelName;
	/**
	 * @Type("integer")
	 */
	public $year;

	function __construct() {
	}

	/**
	 * @return mixed
	 */
	public function getBrandName() {
		return $this->brandName;
	}

	/**
	 * @param mixed $brandName
	 */
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
	}

	/**
	 * @return mixed
	 */
	public function getModelName() {
		return $this->modelName;
	}

	/**
	 * @param mixed $modelName
	 */
	public function setModelName($modelName) {
		$this->modelName = $modelName;
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

}