<?php

namespace common\models;

use Yii;
use \common\models\base\PricingPlans as BasePricingPlans;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pricing_plans".
 */
class PricingPlans extends BasePricingPlans
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
