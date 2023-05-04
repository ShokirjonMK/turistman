<?php

namespace common\models;

use Yii;
use \common\models\base\Service as BaseService;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "service".
 */
class Service extends BaseService
{


	const PATH_PHOTO = '/uploads/photos/service';
	const STATUS_ACTIVE = 1;
	public $photoFile;
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

				# custom validation rules
			]
		);
	}

	public static function getLastId()
	{
		$lastId = Service::find()->select('id')->sort_desc()->scalar() ?: 0;
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

	public function isPhotoExists(): bool
	{
		return file_exists(self::getPhotoAlias() . '/' . $this->image);
	}

	public function deletePhoto()
	{
		return unlink(self::getPhotoAlias() . '/' . $this->image);
	}

	public function generatePhotoName()
	{
		if (self::getIsNewRecord()) {
			return 'service_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		} else {
			return 'service_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		}
	}


	public function uploadPhoto()
	{
		if ($this->validate(false)) {
			$path = Service::getPhotoAlias();
			if (!file_exists($path)) {
				mkdir($path, 0777, true);
			}
			$photoName = $this->generatePhotoName();
			$this->photoFile->saveAs($path . '/' . $photoName);
			$this->image = $photoName;
			return true;
		} else {
			return false;
		}
	}

	public function updatePhoto()
	{
		if ($this->isPhotoExists()) {
			$this->deletePhoto();
		}
		$this->uploadPhoto();
	}

}