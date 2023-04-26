<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\search\UserAddressSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="user-address-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'user_id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'family') ?>

		<?= $form->field($model, 'patronymic_name') ?>

		<?php // echo $form->field($model, 'series') ?>

		<?php // echo $form->field($model, 'series_num') ?>

		<?php // echo $form->field($model, 'pin_fl') ?>

		<?php // echo $form->field($model, 'birth_date') ?>

		<?php // echo $form->field($model, 'address') ?>

		<?php // echo $form->field($model, 'status') ?>

		<?php // echo $form->field($model, 'is_deleted') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'created_by') ?>

		<?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
