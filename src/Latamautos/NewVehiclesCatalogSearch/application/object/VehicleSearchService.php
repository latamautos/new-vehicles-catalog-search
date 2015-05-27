<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\IVehicleSearchService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\FiltersDTO;

class VehicleSearchService extends BaseNewVehicleCatalogService implements IVehicleSearchService {

	function __construct() {
		parent::__construct();
		$this->setDto(new FiltersDTO());
		$this->setUri("new-vehicles-catalog/v1/vehicleSearch/filters");
	}
}