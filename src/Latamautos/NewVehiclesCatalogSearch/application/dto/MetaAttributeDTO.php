<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:49
 */
class MetaAttributeDTO {

	private $name;
	private $attributes;

	function __construct($name, ArrayCollection $attributes) {
		$this->name = $name;
		$this->attributes = $attributes;
	}
}