<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\ISearchFilterService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\FiltersDTO;

class SearchFilterService extends BaseNewVehicleCatalogService implements ISearchFilterService {

	function __construct() {
		parent::__construct();
		$this->setDto(new FiltersDTO());
		$this->setUri("new-vehicles-catalog/v1/modelDetailSearch/filters");
	}
}