<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use JMS\Serializer\Annotation\Type;
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 12:31
 */
class ColorDTO {

    /**
     * @Type("string")
     */
	private $name;
    /**
     * @Type("string")
     */
	private $value;
    /**
     * @Type("string")
     */
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