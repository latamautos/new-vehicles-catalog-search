<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use grupocentrico\basecode\helpers\Thumbnail;
use latam\core\domain\contract\IImageHandler;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IBrandFeaturedService;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IBrandService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class BrandFeaturedService extends BaseNewVehicleCatalogService implements IBrandFeaturedService {

	function __construct() {
		parent::__construct();
		$this->setDto(new CatalogDTO());
		$this->setUri("new-vehicles-catalog/v1/catalogs/brands/featured");
	}
}