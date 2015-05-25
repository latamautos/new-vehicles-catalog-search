<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 5/8/15
 * Time: 12:37 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\contract;


interface ICatalogSchemaService {

	public function setPathParams($pathParamsArray = array ());

	public function setQueryParams($queryParamsArray = array ());

	public function getProcessedURI($objectOrId = null);

	public function store($body, array $queryString = array ());

	public function index(array $queryString = array ());
}