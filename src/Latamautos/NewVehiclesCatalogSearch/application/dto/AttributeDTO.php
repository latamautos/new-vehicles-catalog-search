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

	private $id;
	private $catalog;
	private $value;

	function __construct($id,CatalogDTO $catalog, ArrayCollection $value) {
		$this->id = $id;
		$this->catalog = $catalog;
		$this->value = $value;
	}
}