<?php

namespace common\models;

use Yii;
use \common\models\base\Features as BaseFeatures;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "features".
 */
class Features extends BaseFeatures
{

	const PATH_PHOTO = '/uploads/photos/brand-categories';
	const STATUS_ACTIVE = 1;
	public $photoFile;
	public $photoFiles;


	const STATUS_INACTIVE = 0;

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				[['photoFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png,jpg,jpg,jpeg,jfif,svg'],
				[['photoFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png,jpg,jpg,jpeg,jfif,svg'],
				# custom validation rules
			]
		);
	}

	public static function getLastId()
	{
		$lastId = Features::find()->select('id')->sort_desc()->scalar() ?: 0;
		return ++$lastId;
	}


	public static function getPhotoAlias()
	{
		return Yii::getAlias('@appRoot') . self::PATH_PHOTO;
	}

	public function getPhotoSrc()
	{
		return Url::to(self::PATH_PHOTO . '/' . $this->image);
	}

	public function getPhotoSrcBanner()
	{
		return Url::to(self::PATH_PHOTO . '/' . $this->images);
	}

	public function isPhotoExists(): bool
	{
		return file_exists(self::getPhotoAlias() . '/' . $this->image);
	}

	public function isPhotoExistsBanner(): bool
	{
		return file_exists(self::getPhotoAlias() . '/' . $this->images);
	}

	public function deletePhoto()
	{
		return unlink(self::getPhotoAlias() . '/' . $this->image);
	}

	public function deletePhotoBanner()
	{
		return unlink(self::getPhotoAlias() . '/' . $this->images);
	}

	public function generatePhotoName()
	{
		if (self::getIsNewRecord()) {
			return 'features_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		} else {
			return 'features_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		}
	}

	public function generatePhotoNameBanner()
	{
		if (self::getIsNewRecord()) {
			return 'features_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFiles->extension;
		} else {
			return 'features_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFiles->extension;
		}
	}

	public function uploadPhoto()
	{
		if ($this->validate(false)) {
			$path = Features::getPhotoAlias();
			if (!file_exists($path)) {
				mkdir($path, 0777, true);
			}
			$photoName = $this->generatePhotoName();
			$bannerName = $this->generatePhotoNameBanner();
			$this->photoFile->saveAs($path . '/' . $photoName);
			$this->photoFiles->saveAs($path . '/' . $bannerName);
			$this->image = $photoName;
			$this->images = $bannerName;
			return true;
		} else {
			return false;
		}
	}

	public function updatePhoto()
	{
		if ($this->isPhotoExists() && $this->isPhotoExistsBanner()) {
			$this->deletePhoto();
			$this->deletePhotoBanner();
		}
		$this->uploadPhoto();
	}
}
