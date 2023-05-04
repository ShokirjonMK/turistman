<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "CommentsController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CommentsController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Comments';
}
