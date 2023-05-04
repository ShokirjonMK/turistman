<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Features $model
*/

$this->title = Yii::t('models', 'Features');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Features'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud features-create">

    <h1>
        <?= Yii::t('models', 'Features') ?>
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
