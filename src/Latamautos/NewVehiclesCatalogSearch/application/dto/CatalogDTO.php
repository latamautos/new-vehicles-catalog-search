<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;


class CatalogDTO {

	private $id;
	private $name;
	private $type;

	function __construct($id, $name, $type) {
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
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
	public function getType() {
		return $this->type;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
}