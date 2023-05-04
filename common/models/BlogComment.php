<?php

namespace common\models;

use Yii;
use \common\models\base\BlogComment as BaseBlogComment;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_comment".
 */
class BlogComment extends BaseBlogComment
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
