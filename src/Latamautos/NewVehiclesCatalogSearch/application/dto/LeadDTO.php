<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class LeadDTO {


    /**
     * @Type("Latamautos\NewVehiclesCatalogSearch\application\dto\CustomerDTO")
     */
    public $customer;

    /**
     * @Type("string")
     */
    public $productType;

    /**
     * @Type("string")
     */
    public $locationCode;

    /**
     * @Type("string")
     */
    public $message;

    /**
     * @Type("ArrayCollection<integer>")
     */
    public $productIds;

	function __construct() {
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

    /**
     * @return mixed
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * @param mixed $productIds
     */
    public function setProductIds($productIds)
    {
        $this->productIds = $productIds;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * @return mixed
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * @param mixed $locationCode
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }



}