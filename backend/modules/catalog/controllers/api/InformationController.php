<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "InformationController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class InformationController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Information';
}
