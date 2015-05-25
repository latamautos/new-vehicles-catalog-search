<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\NewVehiclesCatalogSearch\application\contract\ILeadService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\LeadDTO;

class LeadService extends BaseLeadsService implements ILeadService {

	function __construct() {
		parent::__construct();
		$this->setDto(new LeadDTO());
		$this->setUri("leads-java/v1/leads");
	}
}