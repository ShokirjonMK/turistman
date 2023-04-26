<?php

namespace common\models;

use common\models\traits\TraitUploadFile;
use Yii;
use \common\models\base\SettingsHome as BaseSettingsHome;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "settings_home".
 */
class SettingsHome extends BaseSettingsHome
{

	use TraitUploadFile;

	public $photoFile;
	const PATH_PHOTO = '/uploads/photos/banner';

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
				[['photoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg,jpg,jpeg,jfif,svg'],
				# custom validation rules
            ]
        );
    }




}
