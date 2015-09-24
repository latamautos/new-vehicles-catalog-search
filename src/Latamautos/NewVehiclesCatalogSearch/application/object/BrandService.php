<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;

use grupocentrico\basecode\helpers\Thumbnail;
use latam\core\domain\contract\IImageHandler;
use Latamautos\NewVehiclesCatalogSearch\application\contract\IBrandService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\CatalogDTO;

class BrandService extends BaseNewVehicleCatalogService implements IBrandService {

	function __construct(IImageHandler $imageHandler) {
		parent::__construct();
		$this->setDto(new CatalogDTO());
		$this->setUri("new-vehicles-catalog/v1/catalogs/brands");
		$this->imageHandler = $imageHandler;
	}

	public function addOrUpdateImage($image) {
		$image = $this->imageHandler->createCatalogNewsImage('brands', $image);
		return $this->buildPathOfPhoto($image->getResourceId(), $image->getName(),$image->getBucketHash());
	}

	/**
	 * @param $resourceId
	 * @param $namePhoto
	 * @param $imageBucketHash
	 * @return string
	 * @internal param $image
	 */
	private function buildPathOfPhoto($resourceId, $namePhoto, $imageBucketHash) {
		if ($namePhoto == null) {
			return null;
		}
		$imageComplete = "catalogNews/" . $resourceId . "/" . $namePhoto;
        return Thumbnail::getGenericImage($imageComplete, $imageBucketHash,$args = '300x198');
	}
}