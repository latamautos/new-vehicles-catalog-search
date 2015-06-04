<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Latamautos\NewVehiclesCatalogSearch\application\contract\IModelDetailPublicService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ModelDetailDTO;

class ModelDetailPublicService extends BaseNewVehicleCatalogService implements IModelDetailPublicService {

	function __construct() {
		parent::__construct();
		$this->setDto(new ModelDetailDTO());
		$this->setUri("new-vehicles-catalog/v1/model/{modelName}/brand/{brandName}/year/{year}/model-detail");
	}
}