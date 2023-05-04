<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "BlogCommentController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class BlogCommentController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\BlogComment';
}
