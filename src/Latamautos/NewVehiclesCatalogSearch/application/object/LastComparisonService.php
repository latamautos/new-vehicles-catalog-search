<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\ILastComparisonService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\EventComparatorDTO;

class LastComparisonService extends BaseNewVehicleCatalogService implements ILastComparisonService {

	function __construct() {
		parent::__construct();
		$this->setDto(new EventComparatorDTO());
		$this->setUri("new-vehicles-catalog/v1/comparator/last-comparisons");
	}
}