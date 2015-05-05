<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ICatalogService;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ITagService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\AttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDetailDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogEmbeddedDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogListDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ColorDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\MediaDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\VersionDTO;
use Latamautos\NewVehiclesCatalogSearch\application\enum\MediaTypeEnum;
use Latamautos\NewVehiclesCatalogSearch\application\enum\TagTypeEnum;

class TagService implements ITagService {

	function saveTag($catalog) {
		return $this->generateMockSave();
	}

	function findTagByName($argument) {
	return $this->generateMockListCatalog();
	}

	private function generateMockSave() {
		return new CatalogDTO(1,"Motor","TAG");
	}

	private function generateMockListCatalog() {
		$result = new ArrayCollection();
		$result->add(new CatalogDTO(1,"Motor","TAG"));
		$result->add(new CatalogDTO(2,"Transmision","TAG"));
		$result->add(new CatalogDTO(3,"Inyeccion","TAG"));
		$result->add(new CatalogDTO(4,"Freno","TAG"));
		$result->add(new CatalogDTO(5,"Potencia","TAG"));
		return $result;
	}
}