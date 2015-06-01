<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:21 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\contract;


interface ISearchFilterService {

	public function setPathParams($pathParamsArray = array ());

	public function setQueryParams($queryParamsArray = array ());

	public function getProcessedURI($objectOrId=null);

	public function index(array $queryString = array ());
}