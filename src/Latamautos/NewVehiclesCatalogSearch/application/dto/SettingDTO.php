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
class SettingDTO {

	/**
	 * @Type("integer")
	 */
	public $modelId;
	/**
	 * @Type("integer")
	 */
	public $brandId;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\VersionSettingDTO>")
	 */
	public $versionSettings;

	function __construct() {
	}

	/**
	 * @return mixed
	 */
	public function getModelId() {
		return $this->modelId;
	}

	/**
	 * @param mixed $modelId
	 */
	public function setModelId($modelId) {
		$this->modelId = $modelId;
	}

	/**
	 * @return mixed
	 */
	public function getBrandId() {
		return $this->brandId;
	}

	/**
	 * @param mixed $brandId
	 */
	public function setBrandId($brandId) {
		$this->brandId = $brandId;
	}

	/**
	 * @return mixed
	 */
	public function getVersionSettings() {
		return $this->versionSettings;
	}

	/**
	 * @param mixed $versionSettings
	 */
	public function setVersionSettings($versionSettings) {
		$this->versionSettings = $versionSettings;
	}
}