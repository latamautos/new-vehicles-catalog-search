<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\ISearchModelDetailService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ModelDetailSummaryDTO;

class SearchModelDetailService extends BaseNewVehicleCatalogService implements ISearchModelDetailService {

	function __construct() {
		parent::__construct();
		$this->setDto(new ModelDetailSummaryDTO());
		$this->setUri("new-vehicles-catalog/v1/modelDetailSearch/by-params");
	}
}