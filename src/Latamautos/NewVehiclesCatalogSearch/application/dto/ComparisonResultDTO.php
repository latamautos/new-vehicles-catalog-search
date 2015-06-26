<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class ComparisonResultDTO {

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\MetaAttributeDTO>")
     */
    public $metaAttributeList;

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\ModelDetailDTO>")
     */
    public $modelDetailList;


    function __construct() {
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
    public function getModelDetailList() {
        return $this->modelDetailList;
    }

    /**
     * @param mixed $modelDetailList
     */
    public function setModelDetailList($modelDetailList) {
        $this->modelDetailList = $modelDetailList;
    }
}