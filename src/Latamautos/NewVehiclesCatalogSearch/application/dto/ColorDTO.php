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
    public $name;
    /**
     * @Type("string")
     */
    public $value;
    /**
     * @Type("string")
     */
    public $urlImage;

	/**
	 * @Type("string")
	 */
	public $treatedUrl;

	function __construct($name, $value, $urlImage,$treatedUrl) {
		$this->name = $name;
		$this->value = $value;
		$this->urlImage = $urlImage;
		$this->treatedUrl = $treatedUrl;
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

	/**
	 * @return mixed
	 */
	public function getTreatedUrl() {
		return $this->treatedUrl;
	}

	/**
	 * @param mixed $treatedUrl
	 */
	public function setTreatedUrl($treatedUrl) {
		$this->treatedUrl = $treatedUrl;
	}
}