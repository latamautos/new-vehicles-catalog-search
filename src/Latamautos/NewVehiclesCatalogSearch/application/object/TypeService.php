<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ITypeService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class TypeService implements ITypeService {

	function save($catalog) {
		return $this->generateMockSave();
	}

	function findByName($argument) {
		return $this->generateMockListCatalog();
	}

	private function generateMockSave() {
		return new CatalogDTO(1, "Autos", "TYPE");
	}

	private function generateMockListCatalog() {
		$result = new ArrayCollection();
		$result->add(new CatalogDTO(1, "Autos", "TYPE"));
		$result->add(new CatalogDTO(2, "Nautica", "TYPE"));
		$result->add(new CatalogDTO(3, "Motos", "TYPE"));
		$result->add(new CatalogDTO(4, "Camiones", "TYPE"));
		$result->add(new CatalogDTO(5, "Maquinarias", "TYPE"));
		return $result;
	}
}