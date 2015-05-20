<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:37
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;
class CatalogEmbeddedDTO {

	/**
	 * @Type("integer")
	 */
	private $id;
	/**
	 * @Type("string")
	 */
	private $name;

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
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}
}