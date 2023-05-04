<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\BlogComment $model
*/

$this->title = Yii::t('models', 'Blog Comment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Blog Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud blog-comment-create">

    <h1>
        <?= Yii::t('models', 'Blog Comment') ?>
        <small>
                        <?= Html::encode($model->id) ?>
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
