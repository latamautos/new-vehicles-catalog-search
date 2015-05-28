<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\IShopLeadService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ShopLeadDTO;

class ShopLeadService extends BaseNewVehicleCatalogService implements IShopLeadService {

	function __construct() {
		parent::__construct();
		$this->setDto(new ShopLeadDTO());
		$this->setUri("leads-java/v1/shop/leads/{resourceId}");
	}
}