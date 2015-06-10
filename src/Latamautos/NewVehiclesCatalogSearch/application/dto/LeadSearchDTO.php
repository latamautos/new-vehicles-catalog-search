<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class LeadSearchDTO {


    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $date;

    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\ModelDetailDTO")
     */
    public $modelDetail;

    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\LocationDTO")
     */
    public $location;


    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\CustomerDTO")
     */
    public $customer;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getModelDetail()
    {
        return $this->modelDetail;
    }

    /**
     * @param mixed $modelDetail
     */
    public function setModelDetail($modelDetail)
    {
        $this->modelDetail = $modelDetail;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

}