<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IBrandService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class BrandService implements IBrandService {

	function save($catalog) {
		return $this->generateMockSave();
	}

	function findByName($argument) {
		return $this->generateMockListCatalog();
	}

	private function generateMockSave() {
		return new CatalogDTO(1, "Chevrolet", "BRAND");
	}

	private function generateMockListCatalog() {
		$result = new ArrayCollection();
		$result->add(new CatalogDTO(1, "Chevrolet", "BRAND"));
		$result->add(new CatalogDTO(2, "Hyundai", "BRAND"));
		$result->add(new CatalogDTO(3, "BMW", "BRAND"));
		$result->add(new CatalogDTO(4, "Mercedez", "BRAND"));
		$result->add(new CatalogDTO(5, "Kia", "BRAND"));
		return $result;
	}
}