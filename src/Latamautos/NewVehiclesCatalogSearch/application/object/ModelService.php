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

class ModelService extends BaseNewVehicleCatalogService implements IModelService {

	function __construct() {
		parent::__construct();
		$this->setDto(new CatalogDTO());
		$this->setUri("new-vehicles-catalog/v1/catalogs/brand/{brandId}/models");
	}
}