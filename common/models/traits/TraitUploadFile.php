<?php

namespace common\models\traits;

use common\models\SettingsHome;
use Yii;
use yii\helpers\Url;

trait TraitUploadFile
{
	public static function getLastId()
	{
		$lastId = SettingsHome::find()->select('id')->sort_desc()->scalar() ?: 0;
		return ++$lastId;
	}

	public static function getPhotoAlias(): string
	{
		return Yii::getAlias('@appRoot') . self::PATH_PHOTO;
	}

	public function getPhotoSrc(): string
	{
		return Url::to(self::PATH_PHOTO . '/' . $this->imageBanner);
	}

	public function isPhotoExists(): bool
	{
		return file_exists(self::getPhotoAlias() . '/' . $this->imageBanner);
	}

	public function deletePhoto(): bool
	{
		return unlink(self::getPhotoAlias() . '/' . $this->imageBanner);
	}

	public function generatePhotoName(): string
	{
		if (self::getIsNewRecord()) {
			return 'banner_home_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		}else{
			return 'banner_home_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		}
	}

	public function uploadPhoto(): bool
	{
		if ($this->validate(false)) {
			$path = SettingsHome::getPhotoAlias();
			if (!file_exists($path)) {
				mkdir($path, 0777, true);
			}
			$photoName = $this->generatePhotoName();
			$this->photoFile->saveAs($path . '/' . $photoName);
			$this->imageBanner = $photoName;
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