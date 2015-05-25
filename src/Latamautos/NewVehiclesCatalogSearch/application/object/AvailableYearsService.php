<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\NewVehiclesCatalogSearch\application\contract\IAvailableYearsService;

class AvailableYearsService extends BaseNewVehicleCatalogService implements IAvailableYearsService {

	function __construct() {
		parent::__construct();
		$this->setUri("new-vehicles-catalog/v1/available-years");
	}
}