<?php

namespace common\models;

use common\models\traits\TraitPortfolioUploadFile;
use Yii;
use \common\models\base\Portfolyo as BasePortfolyo;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "portfolio".
 */
class Portfolyo extends BasePortfolyo
{

	use TraitPortfolioUploadFile;
	public $photoFile;
	const PATH_PHOTO = '/uploads/photos/portfolio';

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
