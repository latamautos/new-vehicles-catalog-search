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
    public $mediaType;
    /**
     * @Type("string")
     */
    public $tagType;
    /**
     * @Type("string")
     */
    public $url;

	/**
	 * @Type("string")
	 */
	public $treatedUrl;

	function __construct($mediaType, $tagType, $url,$treatedUrl) {
		$this->mediaType = $mediaType;
		$this->tagType = $tagType;
		$this->url = $url;
		$this->treatedUrl = $treatedUrl;
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

	/**
	 * @return mixed
	 */
	public function getTreatedUrl() {
		return $this->treatedUrl;
	}

	/**
	 * @param mixed $treatedUrl
	 */
	public function setTreatedUrl($treatedUrl) {
		$this->treatedUrl = $treatedUrl;
	}
}