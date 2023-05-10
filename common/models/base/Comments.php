<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "comments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $description
 * @property string $message
 * @property string $image
 * @property string $date
 * @property integer $status
 * @property integer $is_deleted
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $aliasModel
 */
abstract class Comments extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['status', 'is_deleted', 'user_id'], 'integer'],
            [['description', 'message', 'image', 'date'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'user_id' => Yii::t('models', 'User Id'),
            'description' => Yii::t('models', 'Description'),
            'message' => Yii::t('models', 'Message'),
            'image' => Yii::t('models', 'Image'),
            'date' => Yii::t('models', 'Date'),
            'status' => Yii::t('models', 'Status'),
            'is_deleted' => Yii::t('models', 'Is Deleted'),
            'created_at' => Yii::t('models', 'Created At'),
            'updated_at' => Yii::t('models', 'Updated At'),
            'created_by' => Yii::t('models', 'Created By'),
            'updated_by' => Yii::t('models', 'Updated By'),
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\query\Comments the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\Comments(get_called_class());
    }


}
