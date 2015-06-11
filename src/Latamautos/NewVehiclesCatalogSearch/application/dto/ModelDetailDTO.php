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
    public $summary;

    /**
     * @Type("string")
     */
    public $photo;

    /**
     * @Type("integer")
     */
    public $year;


    /**
     * @Type("integer")
     */
    public $typeId;


    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO")
     */
    public $type;

    /**
     * @Type("integer")
     */
    public $countVersion;

    /**
     * @Type("integer")
     */
    public $price;


    /**
     * @Type("integer")
     */
    public $brandId;

    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO")
     */
    public $brand;

    /**
     * @Type("integer")
     */
    public $modelId;

    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO")
     */
    public $model;


    /**
     * @Type("string")
     */
    public $currentStatus;

    /**
     * @Type("string")
     */
    public $status;


    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\ColorDTO>")
     */
    public $colors;

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\MediaDTO>")
     */
    public $medias;

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\VersionDTO>")
     */
    public $versions;

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO>")
     */
    public $metaAttributeList;

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
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param mixed $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
    }

    /**
     * @return mixed
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * @param mixed $modelId
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
    }

    /**
     * @return mixed
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param mixed $currentStatus
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
    public function getVersions() {
        return $this->versions;
    }

    /**
     * @param mixed $versions
     */
    public function setVersions($versions) {
        $this->versions = $versions;
    }

    /**
     * @return mixed
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getBrand() {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model) {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getCountVersion() {
        return $this->countVersion;
    }

    /**
     * @param mixed $countVersion
     */
    public function setCountVersion($countVersion) {
        $this->countVersion = $countVersion;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getMetaAttributeList() {
        return $this->metaAttributeList;
    }

    /**
     * @param mixed $metaAttributeList
     */
    public function setMetaAttributeList($metaAttributeList) {
        $this->metaAttributeList = $metaAttributeList;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}