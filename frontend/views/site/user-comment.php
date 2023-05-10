<?php
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
?>
<div class="user-comment-form">
    <div>
        Tashrif buyurgan joylar haqida tafsilotlar qoldirish
    </div>
	<?php $form = ActiveForm::begin(['errorSummaryCssClass' => 'error-summary alert alert-danger']); ?>
    <label for="title">Joy nomi:</label>
	<?= $form->field($model, 'title')->textInput(['style' => 'width: 100%','required' => true])->label(false) ?>

    <label for="date">Borgan sanasi:</label>
	<?= $form->field($model, 'date')->Input('date',['style' => 'width: 100%', 'required' => true])->label(false) ?>

    <label for="image">Sayohatdan rasmlar:</label>

	<?php if (!empty($model->image)): ?>
        <img width="200px" src="<?= $model->getPhotoSrc() ?>" alt="">
	<?php endif; ?>
	<?= $form->field($model, 'photoFile')->fileInput(['style' => 'width: 100%'])->label(false) ?>


    <label for="description">Tavsif:</label>
	<?= $form->field($model, 'message')->textarea(['required' => true])->label(false) ?>

    <button type="submit" value="Submit"> Saqlash</button>
	<?php ActiveForm::end(); ?>

</div>