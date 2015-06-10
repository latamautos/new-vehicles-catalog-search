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
class MetaAttributeDTO {

	/**
	 * @Type("string")
	 */
	public $name;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\AttributeDTO>")
	 */
	public $attributes;

	/**
	 * @Type("boolean")
	 */
	public $showCollapsed;

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

	/**
	 * @return mixed
	 */
	public function getShowCollapsed() {
		return $this->showCollapsed;
	}

	/**
	 * @param mixed $showCollapsed
	 */
	public function setShowCollapsed($showCollapsed) {
		$this->showCollapsed = $showCollapsed;
	}
}