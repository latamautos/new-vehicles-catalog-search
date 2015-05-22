<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\NewVehiclesCatalogSearch\application\contract\IDealerService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\DealerDTO;

class DealerService extends BaseAdminService implements IDealerService {

	function __construct() {
		parent::__construct();
		$this->setDto(new DealerDTO());
		$this->setUri("admin-java/v1/dealers");
	}
}