<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ISiteService;

class SiteService implements ISiteService {

	function getAllSites() {
		$result = new ArrayCollection();
		$result->add("PATIOTUERCA_ECUADOR");
		$result->add("PATIOTUERCA_PANAMA");
		$result->add("PATIOTUERCA_BOLIVIA");
		$result->add("AUTOFOCO");
		$result->add("TODOAUTOS");
		$result->add("SEMINUEVOS");
		return $result;
	}
}