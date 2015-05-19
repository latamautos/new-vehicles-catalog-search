<?php

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\Type;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:49
 */
class VersionDTO {

	/**
	 * @Type("integer")
	 */
	private $id;
	/**
	 * @Type("integer")
	 */
	private $typeId;
	/**
	 * @Type("integer")
	 */
	private $modelId;
	/**
	 * @Type("integer")
	 */
	private $price;
	/**
	 * @Type("string")
	 */
	private $name;
	/**
	 * @Type("integer")
	 */
	private $year;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO>")
	 */
	private $metaAttributes;

	function __construct() {

	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getTypeId() {
		return $this->typeId;
	}

	/**
	 * @param mixed $typeId
	 */
	public function setTypeId($typeId) {
		$this->typeId = $typeId;
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
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
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
	public function getMetaAttributes() {
		return $this->metaAttributes;
	}

	/**
	 * @param mixed $metaAttributes
	 */
	public function setMetaAttributes($metaAttributes) {
		$this->metaAttributes = $metaAttributes;
	}


}