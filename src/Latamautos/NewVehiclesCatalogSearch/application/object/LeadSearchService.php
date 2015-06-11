<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\NewVehiclesCatalogSearch\application\contract\ILeadSearchService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\LeadSearchDTO;

class LeadSearchService extends BaseLeadsService implements ILeadSearchService {

	function __construct() {
		parent::__construct();
		$this->setDto(new LeadSearchDTO());
		$this->setUri("leads-java/v1/leads/search");
	}
}