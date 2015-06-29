<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class EventComparatorDTO {

    /**
     * @Type("string")
     */
    public $date;

    /**
     * @Type("ArrayCollection<Latamautos\NewVehiclesCatalogSearch\application\dto\ComparatorDTO>")
     */
    public $comparatorList;


    function __construct() {
    }

}