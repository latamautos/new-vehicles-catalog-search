<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use Doctrine\Common\Collections\ArrayCollection;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IVersionEmptyService;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IVersionService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\AttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO;
use Latamautos\NewVehiclesCatalogSearch\application\dto\VersionDTO;

class VersionEmptyService extends BaseNewVehicleCatalogService implements IVersionEmptyService {

	function __construct() {
		parent::__construct();
		$this->setDto(new VersionDTO());
		$this->setUri("new-vehicles-catalog/v1/model/{modelId}/versions/empty");
	}
}