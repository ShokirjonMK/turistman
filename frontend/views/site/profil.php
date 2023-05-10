<?php
$models = \common\models\Blog::find()->where(['user_id' => getUserId()])->all();
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
    a {
        text-decoration: none;
        cursor: pointer;
    }

</style>
<div class="user-page">
	<div class="user-page-left-side">
		<!-- user ma'lumotlari -->
		<?=  $this->render('user-info.php') ?>

		<!-- Tashrif buyurgan joylari -->
		<div class="visited-places">
			<div style="font-size: 0.8rem">Tashrif buyurgan joylarim</div><hr>
             <?php foreach ($models as $value): ?>
			 <div class="name">
				<p><a href="<?= \yii\helpers\Url::to(['prof', 'id' => $value->id]) ?>"><?= $value->title ?></a></p>
				<span><?= $value->date ?></span>
			 </div>
			<?php endforeach; ?>
		 </div>
	   </div>

	<!-- Koment yuborish joyi -->
	<?=  $this->render('user-comment.php', ['model' => $model]) ?>

</div>
