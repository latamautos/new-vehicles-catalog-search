<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class LocationDTO {

	/**
	 * @Type("integer")
	 */
	private $id;
	/**
	 * @Type("string")
	 */
	private $code;
	/**
	 * @Type("string")
	 */
	private $shortName;
	/**
	 * @Type("string")
	 */
	private $longName;
    /**
     * @Type("array")
     */
    private $types;
    /**
     * @Type("array")
     */
    private $completeTree;

	function __construct() {
	}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param mixed $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    /**
     * @return mixed
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * @param mixed $longName
     */
    public function setLongName($longName)
    {
        $this->longName = $longName;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return mixed
     */
    public function getCompleteTree()
    {
        return $this->completeTree;
    }

    /**
     * @param mixed $completeTree
     */
    public function setCompleteTree($completeTree)
    {
        $this->completeTree = $completeTree;
    }
}