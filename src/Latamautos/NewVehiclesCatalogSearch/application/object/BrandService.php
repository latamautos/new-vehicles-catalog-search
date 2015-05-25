<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\IBrandService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class BrandService extends BaseNewVehicleCatalogService implements IBrandService {

	function __construct() {
		parent::__construct();
		$this->setDto(new CatalogDTO());
		$this->setUri("new-vehicles-catalog/v1/catalogs/brands");
	}
}