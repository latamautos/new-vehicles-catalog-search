<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 4/29/15
 * Time: 3:22 PM
 */

namespace Latamautos\NewVehiclesCatalogSearch\application\object;



use Latamautos\NewVehiclesCatalogSearch\application\contract\IModelDetailService;
use Latamautos\NewVehiclesCatalogSearch\application\dto\ModelDetailDTO;
use latam\core\domain\contract\IImageHandler;
use grupocentrico\basecode\helpers\Thumbnail;


class ModelDetailService extends BaseNewVehicleCatalogService implements IModelDetailService {

	private $imageHandler;

	function __construct(IImageHandler $imageHandler) {
		parent::__construct();
		$this->setDto(new ModelDetailDTO());
		$this->setUri("new-vehicles-catalog/v1/model/{modelId}/model-detail");
		$this->imageHandler = $imageHandler;
	}

	public function addOrUpdateImage($idType, $idBrand, $idModel, $image) {
		$url = $idType . '/' . $idBrand . '/' . $idModel;
		$image = $this->imageHandler->createCatalogNewsImage($url, $image);
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
		return Thumbnail::getFromBucket($imageComplete, $imageBucketHash,$args = '300x198');
	}
}