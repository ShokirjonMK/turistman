<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\SettingsHome $model
*/

$this->title = Yii::t('models', 'Settings Home');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Settings Home'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud settings-home-update">

    <h1>
        <?= Yii::t('models', 'Settings Home') ?>
        <small>
                        <?= Html::encode($model->name) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
