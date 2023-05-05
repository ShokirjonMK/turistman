<?php

namespace backend\modules\catalog\controllers;

use common\models\Portfolyo;
use Yii;
use yii\web\UploadedFile;

/**
* This is the class for controller "PortfolyoController".
*/
class PortfolyoController extends \backend\modules\catalog\controllers\base\PortfolyoController
{
	public function actionCreate()
	{
		$model = new Portfolyo();

		try {
			if ($model->load($_POST)) {
				$model->photoFile = UploadedFile::getInstance($model, 'photoFile');
				$model->uploadPhoto();
				$model->save(false);
				Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
				return $this->redirect(['index']);
			} elseif (!\Yii::$app->request->isPost) {
				$model->load($_GET);
			}
		} catch (\Exception $e) {
			$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
			$model->addError('_exception', $msg);
		}
		return $this->render('create', ['model' => $model]);
	}

	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		try {
			if ($model->load($_POST)) {
				$model->photoFile = UploadedFile::getInstance($model, 'photoFile');
				if ($model->photoFile !== null) {
					$model->updatePhoto();
				}
				$model->save(false);
				Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
				return $this->redirect(['index']);
			} elseif (!\Yii::$app->request->isPost) {
				$model->load($_GET);
			}
		} catch (\Exception $e) {
			$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
			$model->addError('_exception', $msg);
		}
		return $this->render('update', [
			'model' => $model
		]);

	}
}
