<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:21 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\contract;


interface IVersionService {

	function save($version);

	function getEmptyVersion($typeId);
} 