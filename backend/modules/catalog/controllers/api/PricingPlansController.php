<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "PricingPlansController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PricingPlansController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\PricingPlans';
}
