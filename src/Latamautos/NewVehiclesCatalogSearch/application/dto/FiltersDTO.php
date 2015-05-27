<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use JMS\Serializer\Annotation\Type;
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 12:31
 */
class FiltersDTO {

    /**
     * @Type("array")
     */
	public $types;
    /**
     * @Type("array")
     */
    public $subTypes;
    /**
     * @Type("array")
     */
    public $brands;
    /**
     * @Type("array")
     */
    public $models;

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @return mixed
     */
    public function getSubTypes()
    {
        return $this->subTypes;
    }

    /**
     * @return mixed
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * @return mixed
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @param mixed $subTypes
     */
    public function setSubTypes($subTypes)
    {
        $this->subTypes = $subTypes;
    }

    /**
     * @param mixed $brands
     */
    public function setBrands($brands)
    {
        $this->brands = $brands;
    }

    /**
     * @param mixed $models
     */
    public function setModels($models)
    {
        $this->models = $models;
    }
}