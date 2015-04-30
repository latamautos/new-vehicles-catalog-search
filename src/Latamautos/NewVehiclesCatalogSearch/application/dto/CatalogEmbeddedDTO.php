<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:37
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
class CatalogEmbeddedDTO {

	private $id;
	private $name;

	function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}
}