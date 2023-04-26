<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\UserAddress $model
*/

$this->title = Yii::t('models', 'User Address');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'User Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud user-address-create">

    <h1>
        <?= Yii::t('models', 'User Address') ?>
        <small>
                        <?= Html::encode($model->name) ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
