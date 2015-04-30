<?php

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:49
 */
class VersionDTO {

	private $price;
	private $name;
	private $year;
	private $metaAttributes;

	function __construct($price, $name, $year,ArrayCollection $metaAttributes) {
		$this->price = $price;
		$this->name = $name;
		$this->year = $year;
		$this->metaAttributes = $metaAttributes;
	}
}