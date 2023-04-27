<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "PortfolyoController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PortfolyoController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Portfolyo';
}
