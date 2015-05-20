<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 1:09 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use Latamautos\MicroserviceGateway\core\ArrayCollection;
use JMS\Serializer\Annotation\Type;

class MetaTagDTO {
	/**
	 * @Type("string")
	 */
	private $name;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO>")
	 */
	private $tags;

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param ArrayCollection $tags
	 */
	public function setTags($tags) {
		$this->tags = $tags;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getTags() {
		return $this->tags;
	}



} 