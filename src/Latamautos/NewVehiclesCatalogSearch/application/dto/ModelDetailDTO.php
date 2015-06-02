<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class ModelDetailDTO {

    /**
     * @Type("integer")
     */
    public $id;



    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $summary;

    /**
     * @Type("integer")
     */
    public $year;


    /**
     * @Type("integer")
     */
    public $idType;


    /**
     * @Type("integer")
     */
    public $idBrand;


    /**
     * @Type("integer")
     */
    public $idModel;


    /**
     * @Type("boolean")
     */
    public $current;


    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\ColorDTO>")
     */
    public $colors;

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\MediaDTO>")
     */
    public $medias;


    function __construct() {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getIdBrand()
    {
        return $this->idBrand;
    }

    /**
     * @param mixed $idBrand
     */
    public function setIdBrand($idBrand)
    {
        $this->idBrand = $idBrand;
    }

    /**
     * @return mixed
     */
    public function getIdModel()
    {
        return $this->idModel;
    }

    /**
     * @param mixed $idModel
     */
    public function setIdModel($idModel)
    {
        $this->idModel = $idModel;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param mixed $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }

    /**
     * @return mixed
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param mixed $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param mixed $medias
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;
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

}