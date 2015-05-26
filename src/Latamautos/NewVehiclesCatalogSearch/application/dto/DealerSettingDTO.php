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
class DealerSettingDTO {

	/**
	 * @Type("integer")
	 */
	public $dealerId;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\SettingDTO>")
	 */
	public $settings;

	function __construct() {
	}

	/**
	 * @return mixed
	 */
	public function getDealerId() {
		return $this->dealerId;
	}

	/**
	 * @param mixed $dealerId
	 */
	public function setDealerId($dealerId) {
		$this->dealerId = $dealerId;
	}

	/**
	 * @return mixed
	 */
	public function getSettings() {
		return $this->settings;
	}

	/**
	 * @param mixed $settings
	 */
	public function setSettings($settings) {
		$this->settings = $settings;
	}
}