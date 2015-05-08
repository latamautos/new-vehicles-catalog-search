<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 12:46 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\NewVehiclesCatalogSearch\application\contract\ICatalogSchemaService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogSchemaDTO;

class CatalogSchemaService extends BaseSearchService implements ICatalogSchemaService{

	function __construct() {
		parent::__construct();
		$this->setDto(new CatalogSchemaDTO());
		$this->setUri("ptx/test-microservice-gateway");
	}

} 