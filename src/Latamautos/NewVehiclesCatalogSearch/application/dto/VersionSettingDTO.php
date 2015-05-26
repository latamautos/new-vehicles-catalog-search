<?php

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use Latamautos\MicroserviceGateway\core\ArrayCollection;
use JMS\Serializer\Annotation\Type;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 11:49
 */
class VersionSettingDTO {

	/**
	 * @Type("string")
	 */
	public $codeLocation;
	/**
	 * @Type("ArrayCollection<integer>")
	 */
	public $versionIds;

	function __construct() {
	}

	/**
	 * @return mixed
	 */
	public function getCodeLocation() {
		return $this->codeLocation;
	}

	/**
	 * @param mixed $codeLocation
	 */
	public function setCodeLocation($codeLocation) {
		$this->codeLocation = $codeLocation;
	}

	/**
	 * @return mixed
	 */
	public function getVersionIds() {
		return $this->versionIds;
	}

	/**
	 * @param mixed $versionIds
	 */
	public function setVersionIds($versionIds) {
		$this->versionIds = $versionIds;
	}
}