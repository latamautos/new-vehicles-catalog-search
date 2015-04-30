<?php

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:49
 */
class AttributeDTO {

	private $name;
	private $value;

	function __construct($name,ArrayCollection $value) {
		$this->name = $name;
		$this->value = $value;
	}
}