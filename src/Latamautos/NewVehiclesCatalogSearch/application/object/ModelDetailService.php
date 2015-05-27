<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;



use Latamautos\NewVehiclesCatalogSearch\application\contract\IModelDetailService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ModelDetailDTO;

class ModelDetailService extends BaseNewVehicleCatalogService implements IModelDetailService {

	function __construct() {
		parent::__construct();
        $this->setDto(new ModelDetailDTO());
		$this->setUri("new-vehicles-catalog/v1/model/{modelId}/model-detail");
	}
}