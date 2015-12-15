<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 5/5/15
 * Time: 11:12
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\dto;

use JMS\Serializer\Annotation\Type;

class CustomerDTO {

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
    public $identificationNumber;
	/**
	 * @Type("string")
	 */
    public $email;
    /**
     * @Type("string")
     */
    public $telephone;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getIdentificationNumber() {
        return $this->identificationNumber;
    }

    /**
     * @param mixed $identificationNumber
     */
    public function setIdentificationNumber($identificationNumber) {
        $this->identificationNumber = $identificationNumber;
    }
}