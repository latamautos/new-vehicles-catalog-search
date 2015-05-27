<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\NewVehiclesCatalogSearch\application\contract\ILocationService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\LocationDTO;

class LocationService extends BaseAdminService implements ILocationService {

	function __construct() {
		parent::__construct();
		$this->setDto(new LocationDTO());
		$this->setUri("admin-java/v1/locations");
	}
}