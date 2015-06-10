<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 1:09 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use Latamautos\MicroserviceGateway\core\ArrayCollection;

class MetaTagDTO {

	/**
	 * @Type("string")
	 */
	public $name;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO>")
	 */
	public $tags;

	/**
	 * @Type("boolean")
	 */
	public $showCollapsed;

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

	/**
	 * @return mixed
	 */
	public function getShowCollapsed() {
		return $this->showCollapsed;
	}

	/**
	 * @param mixed $showCollapsed
	 */
	public function setShowCollapsed($showCollapsed) {
		$this->showCollapsed = $showCollapsed;
	}
}