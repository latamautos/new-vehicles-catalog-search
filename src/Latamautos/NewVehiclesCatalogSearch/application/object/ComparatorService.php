<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\IComparatorService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ComparisonResultDTO;

class ComparatorService extends BaseNewVehicleCatalogService implements IComparatorService {

	function __construct() {
		parent::__construct();
		$this->setDto(new ComparisonResultDTO());
		$this->setUri("new-vehicles-catalog/v1/model/versions/comparator");
	}
}