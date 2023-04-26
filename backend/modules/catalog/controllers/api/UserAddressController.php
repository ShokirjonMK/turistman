<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "UserAddressController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class UserAddressController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\UserAddress';
}
