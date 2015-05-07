<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IVehicleCatalogService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\AttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDetailDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogEmbeddedDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogListDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ColorDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\MediaDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\VersionDTO;
use Latamautos\NewVehiclesCatalogSearch\application\enum\MediaTypeEnum;
use Latamautos\NewVehiclesCatalogSearch\application\enum\TagTypeEnum;

class VehicleCatalogService implements IVehicleCatalogService {

	function findListCatalogByParams($type, $brand, $model) {
		return $this->buildMockCatalogList();
	}

	function findCatalogDetailById($id) {
		return $this->buildMockCatalogDetail();
	}

	private function buildMockCatalogList() {
		return new CatalogListDTO(new CatalogEmbeddedDTO(1, "Auto"), $this->buildMockSubtypes(), new CatalogEmbeddedDTO(1, "Chevrolet"), new CatalogEmbeddedDTO(1, "Sail"), "Summary of Sail", $this->buildMockVersions(), $this->buildMockColors(), $this->buildMockMedias());
	}

	private function buildMockCatalogDetail() {
		$result = new ArrayCollection();
		$result->add(new CatalogDetailDTO("Chevrolet", "Sail", 14000, 3, "http://www.blogcdn.com/es.autoblog.com/media/2011/04/2011algeriesail4p.jpg", $this->buildMockSubtypes()));
		$result->add(new CatalogDetailDTO("Hyundai", "Getz", 15666, 2, "http://onlytruecars.com/data_images/models/hyundai-getz/hyundai-getz-05.jpg", $this->buildMockSubtypes()));
		$result->add(new CatalogDetailDTO("Honda", "Accord", 17999, 1, "http://www.alvolante.info/wp-content/uploads/Honda-Accord-Crosstour-20101.jpg", $this->buildMockSubtypes()));
		$result->add(new CatalogDetailDTO("Chevrolet", "Grand Vitara", 23000, 5, "http://t3.gstatic.com/images?q=tbn:ANd9GcTAZbh_zyNHJpncDluu5oKldJBEl2jUi5CBT1t-mWyrqhKsYM7Brw", $this->buildMockSubtypes()));
		$result->add(new CatalogDetailDTO("Chevrolet", "Cruze", 15000, 4, "http://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Chevrolet_Cruze.JPG/800px-Chevrolet_Cruze.JPG", $this->buildMockSubtypes()));
		return $result;
	}

	private function buildMockSubtypes() {
		$result = new ArrayCollection();
		$result->add(new CatalogEmbeddedDTO(1, "Sedan"));
		$result->add(new CatalogEmbeddedDTO(2, "Hatchback"));
		return $result;
	}

	private function buildMockVersions() {
		$result = new ArrayCollection();
		$result->add(new VersionDTO(1,1,15000, "V1", 2015, $this->buildMockMetaAttributes()));
		$result->add(new CatalogEmbeddedDTO(2, "Hatchback"));
		return $result;
	}

	private function buildMockColors() {
		$result = new ArrayCollection();
		$result->add(new ColorDTO("rojo", "FF0000", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT553tWd3S7vSu10to2tZaiaebdE3ElFdH9Q9taRC6KvtFr1D2P"));
		$result->add(new ColorDTO("blanco", "FFFFFF", "http://www.blogcdn.com/es.autoblog.com/media/2011/04/2011algeriesail4p.jpg"));
		return $result;
	}

	private function buildMockMedias() {
		$result = new ArrayCollection();
		$result->add(new MediaDTO(MediaTypeEnum::IMAGE()->getName(), TagTypeEnum::INTERIOR()->getName(), "http://www.chevrolet.com.ec/content/dam/Chevrolet/lat-am/Ecuador/nscwebsite/es/Home/Cars/Sail%20Sedan/model-overview/01_images/2013-chevrolet-sail-sedan-interior-prestaciones-980x476.jpg"));
		$result->add(new MediaDTO(MediaTypeEnum::IMAGE()->getName(), TagTypeEnum::EXTERIOR()->getName(), "http://www.blogcdn.com/es.autoblog.com/media/2011/04/2011algeriesail4p.jpg"));
		return $result;
	}

	private function buildMockMetaAttributes() {
		$result = new ArrayCollection();
		$result->add(new MetaAttributeDTO("Motor", $this->buildMockAttribute()));
		$result->add(new MetaAttributeDTO("Transmision", $this->buildMockAttribute()));
		$result->add(new MetaAttributeDTO("Dimensiones", $this->buildMockAttribute()));
		return $result;
	}

	private function buildMockAttribute() {
		$result = new ArrayCollection();
		$result->add(new AttributeDTO(1,"Alimentacion", new ArrayCollection(["Inyección Directa"])));
		$result->add(new AttributeDTO(2,"Cilindros", new ArrayCollection(["4"])));
		$result->add(new AttributeDTO(3,"Motor", new ArrayCollection(["1600 cm3"])));
		$result->add(new AttributeDTO(4,"Potencia", new ArrayCollection(["163cv"])));
		$result->add(new AttributeDTO(5,"Válvulas", new ArrayCollection(["16"])));
		return $result;
	}
}