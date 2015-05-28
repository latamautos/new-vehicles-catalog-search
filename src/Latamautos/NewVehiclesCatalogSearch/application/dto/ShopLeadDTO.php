<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class ShopLeadDTO {

	/**
	 * @Type("integer")
	 */
	public $resourceId;
	/**
	 * @Type("integer")
	 */
	public $leadId;

	function __construct() {
	}

	/**
	 * @return mixed
	 */
	public function getResourceId() {
		return $this->resourceId;
	}

	/**
	 * @param mixed $resourceId
	 */
	public function setResourceId($resourceId) {
		$this->resourceId = $resourceId;
	}

	/**
	 * @return mixed
	 */
	public function getLeadId() {
		return $this->leadId;
	}

	/**
	 * @param mixed $leadId
	 */
	public function setLeadId($leadId) {
		$this->leadId = $leadId;
	}
}