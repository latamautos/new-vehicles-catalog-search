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
class MetaAttributeDTO {

	/**
	 * @Type("string")
	 */
	private $name;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\AttributeDTO>")
	 */
	private $attributes;

	function __construct() {
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
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * @param mixed $attributes
	 */
	public function setAttributes($attributes) {
		$this->attributes = $attributes;
	}
}