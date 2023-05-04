<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Information $model
*/

$this->title = Yii::t('models', 'Information');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Information'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud information-update">

    <h1>
        <?= Yii::t('models', 'Information') ?>
        <small>
                        <?= Html::encode($model->id) ?>
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
