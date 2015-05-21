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
class AttributeDTO {

	/**
	 * @Type("integer")
	 */
	public $id;
	/**
	 * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogEmbeddedDTO")
	 */
	public $catalog;
	/**
	 * @Type("ArrayCollection<string>")
	 */
	public $values;

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
	public function getCatalog() {
		return $this->catalog;
	}

	/**
	 * @param mixed $catalog
	 */
	public function setCatalog($catalog) {
		$this->catalog = $catalog;
	}

	/**
	 * @return mixed
	 */
	public function getValues() {
		return $this->values;
	}

	/**
	 * @param mixed $values
	 */
	public function setValues($values) {
		$this->values = $values;
	}
}