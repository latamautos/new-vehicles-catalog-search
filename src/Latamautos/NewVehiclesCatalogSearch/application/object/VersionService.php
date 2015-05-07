<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IVersionService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\AttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\VersionDTO;

class VersionService implements IVersionService {

	function save($version) {
		return $this->generateMockSave();
	}

	function getEmptyVersion($typeId) {
		return $this->getEmptyVersionMock($typeId);
	}

	private function generateMockSave() {
		return new VersionDTO(1, 1, 10, "V1", 2015, $this->generateMockMetaAttributeList(false));
	}

	private function getEmptyVersionMock() {
		return new VersionDTO(1, 1, 10, "V1", 2015, $this->generateMockMetaAttributeList(true));
	}

	private function generateMockMetaAttributeList($empty) {
		$result = new ArrayCollection();
		$result->add(new MetaAttributeDTO("Motor", $this->generateMockAttributeList($empty)));
		return $result;
	}

	private function generateMockAttributeList($empty) {
		$result = new ArrayCollection();
		$result->add(new AttributeDTO(1, new CatalogDTO(1, "Potencia", "TAG"), $this->generateMockValues($empty)));
		$result->add(new AttributeDTO(2, new CatalogDTO(2, "Cilindraje", "TAG"), $this->generateMockValues($empty)));
		$result->add(new AttributeDTO(3, new CatalogDTO(3, "Valvulas", "TAG"), $this->generateMockValues($empty)));
		return $result;
	}

	private function generateMockValues($empty) {
		$result = new ArrayCollection();
		if ($empty) {
			$result->add("");
		} else {
			$result->add("899");
		}
		return $result;
	}
}