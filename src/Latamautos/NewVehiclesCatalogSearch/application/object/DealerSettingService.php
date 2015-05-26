<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\IDealerSettingService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\DealerSettingDTO;

class DealerSettingService extends BaseNewVehicleCatalogService implements IDealerSettingService {

	function __construct() {
		parent::__construct();
		$this->setDto(new DealerSettingDTO());
		$this->setUri("leads-java/v1/dealer/settings/{dealerId}");
	}
}