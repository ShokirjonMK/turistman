<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "SettingsHomeController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SettingsHomeController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\SettingsHome';
}
