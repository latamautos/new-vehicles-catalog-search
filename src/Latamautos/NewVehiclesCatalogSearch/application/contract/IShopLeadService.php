<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:21 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\contract;

interface IShopLeadService {

	public function setPathParams($pathParamsArray = array ());

	public function setQueryParams($queryParamsArray = array ());

	public function getProcessedURI($objectOrId = null);

	public function store($body, array $queryString = array ());

	public function index(array $queryString = array ());
}