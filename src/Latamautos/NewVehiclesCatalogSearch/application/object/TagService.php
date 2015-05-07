<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ITagService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class TagService implements ITagService {

	function save($catalog) {
		return $this->generateMockSave();
	}

	function findByName($argument) {
		return $this->generateMockListCatalog();
	}

	private function generateMockSave() {
		return new CatalogDTO(1, "Motor", "TAG");
	}

	private function generateMockListCatalog() {
		$result = new ArrayCollection();
		$result->add(new CatalogDTO(1, "Motor", "TAG"));
		$result->add(new CatalogDTO(2, "Transmision", "TAG"));
		$result->add(new CatalogDTO(3, "Inyeccion", "TAG"));
		$result->add(new CatalogDTO(4, "Freno", "TAG"));
		$result->add(new CatalogDTO(5, "Potencia", "TAG"));
		return $result;
	}


}