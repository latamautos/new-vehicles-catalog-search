<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IModelService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class ModelService implements IModelService {

	function save($catalog) {
		return $this->generateMockSave();
	}

	function findByName($argument) {
		return $this->generateMockListCatalog();
	}

	private function generateMockSave() {
		return new CatalogDTO(1, "Cruze", "MODEL");
	}

	private function generateMockListCatalog() {
		$result = new ArrayCollection();
		$result->add(new CatalogDTO(1, "Getz", "MODEL"));
		$result->add(new CatalogDTO(2, "Grand Vitara", "MODEL"));
		$result->add(new CatalogDTO(3, "Sail", "MODEL"));
		$result->add(new CatalogDTO(4, "350i", "MODEL"));
		$result->add(new CatalogDTO(5, "GTI", "MODEL"));
		return $result;
	}
}