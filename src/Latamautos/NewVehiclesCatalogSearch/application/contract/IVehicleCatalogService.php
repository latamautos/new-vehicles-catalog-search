<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:21 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\contract;


interface IVehicleCatalogService {

	function findListCatalogByParams($type,$brand,$model) ;

	function findCatalogDetailById($id);
} 