<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "FeaturesController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class FeaturesController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Features';
}
