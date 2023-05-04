<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Features $model
*/

$this->title = Yii::t('models', 'Features');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Features'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud features-update">

    <h1>
        <?= Yii::t('models', 'Features') ?>
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
