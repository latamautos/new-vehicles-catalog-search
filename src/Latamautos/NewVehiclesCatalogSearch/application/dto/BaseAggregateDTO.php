<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 12:51 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;


class BaseAggregateDTO {
	private $id;

	/**
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}



} 