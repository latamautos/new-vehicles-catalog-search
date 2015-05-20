<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 12:48 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;


use Latamautos\MicroserviceGateway\core\ArrayCollection;
use JMS\Serializer\Annotation\Type;

class CatalogSchemaDTO extends BaseAggregateDTO {


	/**
	 * @Type("integer")
	 */
	private $typeId;
	/**
	 * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\MetaTagDTO>")
	 */
	private $metaTags;

	/**
	 * @param ArrayCollection $metaTags
	 */
	public function setMetaTags($metaTags) {
		$this->metaTags = $metaTags;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getMetaTags() {
		return $this->metaTags;
	}

	/**
	 * @param int $typeId
	 */
	public function setTypeId($typeId) {
		$this->typeId = $typeId;
	}

	/**
	 * @return int
	 */
	public function getTypeId() {
		return $this->typeId;
	}
}