<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\PricingPlans $model
*/

$this->title = Yii::t('models', 'Pricing Plans');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Pricing Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud pricing-plans-create">

    <h1>
        <?= Yii::t('models', 'Pricing Plans') ?>
        <small>
                        <?= Html::encode($model->name) ?>
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
