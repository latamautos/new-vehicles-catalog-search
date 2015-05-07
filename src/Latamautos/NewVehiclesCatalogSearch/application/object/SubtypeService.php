<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ISubtypeService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class SubtypeService implements ISubtypeService {

	function save($catalog) {
		return $this->generateMockSave();
	}

	function findByName($argument) {
		return $this->generateMockListCatalog();
	}

	private function generateMockSave() {
		return new CatalogDTO(1, "Todoterreno", "SUBTYPE");
	}

	private function generateMockListCatalog() {
		$result = new ArrayCollection();
		$result->add(new CatalogDTO(1, "Sedan", "SUBTYPE"));
		$result->add(new CatalogDTO(2, "Coupe", "SUBTYPE"));
		$result->add(new CatalogDTO(3, "Camioneta", "SUBTYPE"));
		$result->add(new CatalogDTO(4, "Hatchback", "SUBTYPE"));
		$result->add(new CatalogDTO(5, "Convertible", "SUBTYPE"));
		return $result;
	}
}