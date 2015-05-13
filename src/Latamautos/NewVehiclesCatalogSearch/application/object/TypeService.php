<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\MicroserviceGateway\core\RemoteService;
use Latamautos\MicroserviceGateway\core\RestPagination;
use Latamautos\NewVehiclesCatalogSearch\application\contract\ITypeService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class TypeService extends RemoteService implements ITypeService {

	function __construct() {
		parent::__construct();
		$this->setDto(new CatalogDTO());
		$this->setUri("new-vehicles-catalog/v1/catalogs/type");
	}
}