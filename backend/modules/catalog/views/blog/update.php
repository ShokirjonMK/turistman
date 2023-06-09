<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Blog $model
*/

$this->title = Yii::t('models', 'Blog');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Blog'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud blog-update">

    <h1>
        <?= Yii::t('models', 'Blog') ?>
        <small>
                        <?= Html::encode($model->title) ?>
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
