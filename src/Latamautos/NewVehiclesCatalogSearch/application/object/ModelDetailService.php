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

	const IMAGE_BASE_FOLDER = "catalogNews/";
	private $imageHandler;

	function __construct(IImageHandler $imageHandler) {
		parent::__construct();
		$this->setDto(new ModelDetailDTO());
		$this->setUri("new-vehicles-catalog/v1/model/{modelId}/model-detail");
		$this->imageHandler = $imageHandler;
	}

	public function addOrUpdateImage($idModel, $image) {
		$image = $this->imageHandler->createCatalogNewsImage($idModel, $image);
		return $this->createPathFormImage($image);
	}

	/**
	 * @param $resourceId
	 * @param $namePhoto
	 * @return string
	 */
	private function buildAmazonPathOfImage($resourceId, $namePhoto) {
		if ($namePhoto == null) {
			return null;
		}
		$imageComplete = $this::IMAGE_BASE_FOLDER . $resourceId . "/" . $namePhoto;
		return Thumbnail::getGenericImage($imageComplete);
	}

	/**
	 * @param $resourceId
	 * @param $namePhoto
	 * @param $imageBucketHash
	 * @return string
	 */
	private function buildNginxPathOfImage($resourceId, $namePhoto, $imageBucketHash) {
		if ($namePhoto == null) {
			return null;
		}
		$imageComplete = $this::IMAGE_BASE_FOLDER . $resourceId . "/" . $namePhoto;
		return Thumbnail::getFromBucket($imageComplete, $imageBucketHash, $args = '[SIZE_PLACEHOLDER]');
	}

	function addOrUpdateImageFromURL($idModel, $url) {
		$image = $this->imageHandler->uploadNewsCatalogPhotoUrlToS3($idModel, $url);
		$imgUrls= $this->createPathFormImage($image);
		return ["amazon"=>$imgUrls->amazon,"nginx"=>$imgUrls->nginx];
	}

	/**
	 * @param $image
	 * @return \stdClass
	 */
	private function createPathFormImage($image) {
		$imgUrls = new \stdClass();
		$imgUrls->amazon = $this->buildAmazonPathOfImage($image->getResourceId(), $image->getName());
		$imgUrls->nginx = $this->buildNginxPathOfImage($image->getResourceId(), $image->getName(), $image->getBucketHash());
		return $imgUrls;
	}
}