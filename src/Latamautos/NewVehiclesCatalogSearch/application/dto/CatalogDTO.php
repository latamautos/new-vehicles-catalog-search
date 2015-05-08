<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use JMS\Serializer\Annotation\Type;

class CatalogDTO {
	/**
	 * @Type("long")
	 */
	private $id;
	/**
	 * @Type("string")
	 */
	private $name;
	/**
	 * @Type("string")
	 */
	private $type;

	function __construct($id, $name, $type) {
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
}