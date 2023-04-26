<?php

namespace frontend\controllers;

use common\models\LoginForm;
use common\models\User;
use common\models\UserAddress;
use frontend\models\SignupForm;
use Yii;
use yii\web\Controller;

class SignupController extends Controller
{


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    public function actionCreate()
    {

        $model = new UserAddress();

        try {
            if ($model->load($_POST)) {

                $data = passport(passera($model), passera_num($model), $model->date);
                if ($data){
                    $model->saveData($data);
                    Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
                    return $this->redirect(['signup/login']);
                }else{
                    Yii::$app->session->setFlash('error', Yii::t('ui', "Passport ma`lumotlari noto'g'ri"));
                    return $this->redirect(['create']);
                }

            } elseif (!\Yii::$app->request->isPost) {
                $model->load($_GET);
            }
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            $model->addError('_exception', $msg);
        }
        return $this->render('create', ['model' => $model]);

    }


}