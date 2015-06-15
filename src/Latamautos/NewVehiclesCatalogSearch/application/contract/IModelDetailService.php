<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:21 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\contract;


use Latamautos\MicroserviceGateway\core\IResource;

interface IModelDetailService extends IResource {

	public function addOrUpdateImage($idModel, $image);

}