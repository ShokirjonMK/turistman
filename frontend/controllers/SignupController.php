<?php

namespace frontend\controllers;

use common\models\LoginForm;
use common\models\User;
use common\models\UserAddress;
use frontend\models\SignupForm;
use Yii;
use yii\web\Controller;
use yii\web\Session;
use function mysql_xdevapi\getSession;

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
            return $this->redirect(['site/profil']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/profil']);
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
				session_start();
                $data = passport(passera($model), passera_num($model), $model->date);
                $_SESSION['data'] = $data;
				$_SESSION['email'] = $model->email;
				if (!User::findOne(['email' => $model->email]))
				{
					if ($data){
						Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
						return $this->redirect(['signup/pasport']);
					}else {
						Yii::$app->session->setFlash('error', Yii::t('ui', "Malumotni tekshiring"));
						$model->load($_GET);
					}
				}else {
					Yii::$app->session->setFlash('error', Yii::t('ui', "bu email alla qachon ruyxatga olingan"));
					$model->load($_GET);
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

	public function actionPasport($status = null)
	{
		session_start();
		$data = $_SESSION['data'];
		if ($status) {
			$model = new UserAddress;
			$model->saveData($data);
			session_unset();
			Yii::$app->session->setFlash('success', Yii::t('ui', "Ro'yhatdan o'ttingiz. Foydalanish ma'lumotlari emailizga jo'natildi!"));
			return $this->redirect(['signup/login']);
		}
		if ($data != null){
			return $this->render('pasport');
		} else {
			return $this->redirect(['signup/create']);
		}
	}


}