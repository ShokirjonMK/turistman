<?php

namespace common\models;

use Yii;
use \common\models\base\PortfolioImages as BasePortfolioImages;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "portfolio_images".
 */
class PortfolioImages extends BasePortfolioImages
{

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
                # custom validation rules
            ]
        );
    }
}
