<?php
$models = \common\models\Comments::find()->where(['user_id' => getUserId()])->all();
?>

<div class="user-page">
	<div class="user-page-left-side">
		<!-- user ma'lumotlari -->
		<div class="my-info">
			<img class="user-image"
				 src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg"
				 alt="">
			<div class="user-passport-infos">
				<p>
					Tulqin Muxtorov Uktam o'g'li
				</p>
				<hr>

			</div>
		</div>


		<!-- Tashrif buyurgan joylari -->
		<div class="visited-places">
			<div>Tashrif buyurgan joylarim</div>
            <?php foreach ($models as $value): ?>
			<div class="name">
				<p><?= $value->message ?></p>
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
		<?php use yii\bootstrap\ActiveForm;
		$form = ActiveForm::begin(['errorSummaryCssClass' => 'error-summary alert alert-danger']); ?>
			<label for="title">Joy nomi:</label>
			<?= $form->field($model, 'message')->textInput(['style' => 'width: 100%','required' => true])->label(false) ?>

			<label for="date">Borgan sanasi:</label>
		     <?= $form->field($model, 'date')->Input('date',['style' => 'width: 100%', 'required' => true])->label(false) ?>

			<label for="image">Sayohatdan rasmlar:</label>

				<?= $form->field($model, 'image')->textInput(['style' => 'width: 100%', 'required' => true])->label(false) ?>


			<label for="description">Description:</label>
		    <?= $form->field($model, 'description')->textarea(['required' => true])->label(false) ?>

			<button type="submit" value="Submit"> Saqlash</button>
			<?php ActiveForm::end(); ?>

	</div>

</div>