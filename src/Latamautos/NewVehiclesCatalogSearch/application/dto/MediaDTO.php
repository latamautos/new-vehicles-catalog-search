<?php
namespace Latamautos\NewVehiclesCatalogSearch\application\dto;
use JMS\Serializer\Annotation\Type;
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 30/4/15
 * Time: 12:33
 */
class MediaDTO {

    /**
     * @Type("string")
     */
	private $mediaType;
    /**
     * @Type("string")
     */
	private $tagType;
    /**
     * @Type("string")
     */
	private $url;

	function __construct($mediaType, $tagType, $url) {
		$this->mediaType = $mediaType;
		$this->tagType = $tagType;
		$this->url = $url;
	}

	/**
	 * @return mixed
	 */
	public function getMediaType() {
		return $this->mediaType;
	}

	/**
	 * @return mixed
	 */
	public function getTagType() {
		return $this->tagType;
	}

	/**
	 * @return mixed
	 */
	public function getUrl() {
		return $this->url;
	}
}