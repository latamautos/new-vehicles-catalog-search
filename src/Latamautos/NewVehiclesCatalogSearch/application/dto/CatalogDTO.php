<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class CatalogDTO {

	/**
	 * @Type("integer")
	 */
	private $id;
	/**
	 * @Type("string")
	 */
	private $name;
	/**
	 * @Type("string")
	 */
	private $type;
	/**
	 * @Type("string")
	 */
	private $site;
	/**
	 * @Type("string")
	 */
	private $status;
	/**
	 * @Type("integer")
	 */
	private $catalogParentId;

	function __construct() {
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getSite() {
		return $this->site;
	}

	/**
	 * @param mixed $site
	 */
	public function setSite($site) {
		$this->site = $site;
	}

	/**
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param mixed $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return mixed
	 */
	public function getCatalogParentId() {
		return $this->catalogParentId;
	}

	/**
	 * @param mixed $catalogParentId
	 */
	public function setCatalogParentId($catalogParentId) {
		$this->catalogParentId = $catalogParentId;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}
}