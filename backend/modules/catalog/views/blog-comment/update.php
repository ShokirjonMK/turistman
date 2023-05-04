<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\BlogComment $model
*/

$this->title = Yii::t('models', 'Blog Comment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Blog Comment'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud blog-comment-update">

    <h1>
        <?= Yii::t('models', 'Blog Comment') ?>
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
