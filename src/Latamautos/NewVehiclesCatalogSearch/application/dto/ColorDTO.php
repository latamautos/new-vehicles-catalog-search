<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 12:31
 */
class ColorDTO {

	private $name;
	private $value;
	private $urlImage;

	function __construct($name, $value, $urlImage) {
		$this->name = $name;
		$this->value = $value;
		$this->urlImage = $urlImage;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @return mixed
	 */
	public function getUrlImage() {
		return $this->urlImage;
	}
}