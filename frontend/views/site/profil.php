<?php
$models = \common\models\Blog::find()->where(['user_id' => getUserId()])->all();
$userAdd = \common\models\UserAddress::find()->where(['user_id' => getUserId()])->one();
?>
<style>
    input::file-selector-button {
        font-weight: bold;
        color: dodgerblue;
        padding: 0.5em;
        border: thin solid grey;
        border-radius: 3px;
        cursor: pointer;
    }

</style>
<div class="user-page">
	<div class="user-page-left-side">
		<!-- user ma'lumotlari -->
		<div class="my-info">
			<img class="user-image"
				 src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg"
				 alt="">
			 <div class="user-passport-infos">
				<p style="font-size: 1rem">
                    <?= $userAdd->name . ' ' . $userAdd->family ?>
				</p>
				<hr>

			</div>
		</div>


		<!-- Tashrif buyurgan joylari -->
		<div class="visited-places">
			<div style="font-size: 0.8rem">Tashrif buyurgan joylarim</div><hr>
            <?php foreach ($models as $value): ?>
			<div class="name">
				<p><?= $value->title ?></p>
				<span><?= $value->date ?></span>
			</div>
			<?php endforeach; ?>
		</div>

	</div>

	<!-- Koment yuborish joyi -->
	<div class="user-comment-form">
		<div>
			Tashrif buyurgan joylar haqida tafsilotlar qoldirish
		</div>
		<?php use kartik\file\FileInput;
		use yii\bootstrap\ActiveForm;
		$form = ActiveForm::begin(['errorSummaryCssClass' => 'error-summary alert alert-danger']); ?>
			<label for="title">Joy nomi:</label>
			<?= $form->field($model, 'title')->textInput(['style' => 'width: 100%','required' => true])->label(false) ?>

			<label for="date">Borgan sanasi:</label>
		     <?= $form->field($model, 'date')->Input('date',['style' => 'width: 100%', 'required' => true])->label(false) ?>

			<label for="image">Sayohatdan rasmlar:</label>

			<?= $form->field($model, 'photoFile')->fileInput(['style' => 'width: 100%', 'required' => true])->label(false) ?>


			<label for="description">Tavsif:</label>
		    <?= $form->field($model, 'message')->textarea(['required' => true])->label(false) ?>

			<button type="submit" value="Submit"> Saqlash</button>
			<?php ActiveForm::end(); ?>

	</div>

</div>