<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\ServiceCategory $model
*/

$this->title = Yii::t('models', 'Service Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Service Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud service-category-create">

    <h1>
        <?= Yii::t('models', 'Service Category') ?>
        <small>
                        <?= Html::encode($model->title) ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            Yii::t('cruds', 'Cancel'),
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
