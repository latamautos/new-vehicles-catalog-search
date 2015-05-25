<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 12:43 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;


use Latamautos\MicroserviceGateway\core\RemoteService;

class BaseLeadsService extends RemoteService{

	function __construct() {
		parent::__construct();
		$this->setDomain(\Config::get('LatamAutosMicroservice.domainLeads'));
	}
}
