<?php

namespace common\models;

use Yii;
use \common\models\base\UserAddress as BaseUserAddress;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user_address".
 */
class UserAddress extends BaseUserAddress
{

    public $sera_num;

    public $date;
    public $email;

    public function beforeSave($insert):bool
    {
        if (parent::beforeSave($insert)) {
            $related = $this->getRelatedRecords();
            /** @var User $user */
            if (isset($related['user']) && $user = $related['user']) {
                $this->user_id = $user->id;
            }
            return true;
        }
        return false;
    }
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
                [['sera_num', 'date'], 'required'],
                [['sera_num', 'email'], 'string', 'max' => 255],
                [['date'],  'safe'],
                # custom validation rules
            ]
        );
    }

    public function saveData($data)
    {
		session_start();

        $user = new User();
        $user->username = $data->name.'_'.user_random_id();
        $user->auth_key = \Yii::$app->security->generateRandomString(20);
        $user->email = $_SESSION['email'];
		$pass = randomString();
        $user->setPassword($pass);
        $user->generateEmailVerificationToken();

        $model = new UserAddress;
        $model->populateRelation('user', $user);
        $model->pin_fl = "$data->pinfl";
        $model->name = "$data->name";
        $model->family = "$data->sur_name";
        $model->patronymic_name = "$data->patronymic_name";
        $model->series = "$data->series";
        $model->series_num = "$data->number";
        $model->birth_date = "$data->birth_date";
        $model->address = "$data->address";

		Yii::$app->mailer->compose()
		->setFrom(['tulqin484@gmail.com' => 'Turistman Group'])
		->setTo(str_replace(" ", "", $_SESSION['email']))
		->setSubject('Turistman success')
		->setHtmlBody('<span>login: '.$user->username . '<br> parol: ' . $pass . ' </span>')
		->send();

        $transaction = Yii::$app->db->beginTransaction();
        try {

            if (!$user->save()) {
                throw new \Exception('Произошла ошибка при сохранении данных. User');
            }
            if (!$model->save(false)) {
                throw new \Exception('Произошла ошибка при сохранении данных. UserAddress');
            }

            Yii::$app->session->setFlash('success', Yii::t('ui', "Login va parol emailga yuborildi! "));
            $transaction->commit();
        } catch (\Exception $e) {
            Yii::$app->session->setFlash('error', Yii::t('ui', "Произошла ошибка. Пожалуйста, попробуйте еще раз") . $e->getMessage());
            $transaction->rollBack();
            throw $e;
        }

    }


}
