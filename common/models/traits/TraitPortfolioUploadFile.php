<?php

namespace common\models\traits;

use common\models\Portfolyo;
use Yii;
use yii\helpers\Url;

trait TraitPortfolioUploadFile
{
	public static function getLastId()
	{
		$lastId = Portfolyo::find()->select('id')->sort_desc()->scalar() ?: 0;
		return ++$lastId;
	}

	public static function getPhotoAlias(): string
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
			return 'portfolio_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		}else{
			return 'portfolio_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
		}
	}

	public function uploadPhoto()
	{
		if ($this->validate(false)) {
			$path = Portfolyo::getPhotoAlias();
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