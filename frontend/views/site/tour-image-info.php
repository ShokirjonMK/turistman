<?php
$model = \common\models\Portfolyo::findOne($id)
?>

<div class="tour-image-info" id="home">
	<div class="container">
		<div class="row">
			<div class="selected-image">
				<!-- tanlangan rasm chiqadi -->
				<img class="tour-image" src="<?= $model->getPhotoSrc() ?>" alt="">

			</div>
			<!-- mijoz nomi va image joyi nomi -->
			<div>
				<h4>Duru Village</h4>
				<div class="tour-image-client" style="padding: 10px;">
					<b>
						Client
					</b>
					<p>
						<?= $model->title ?>
					</p>
				</div>
			</div>

			<!-- rasm haiqda malumot -->
			<div class="image-desc">
				<p>
					<?= $model->description ?>
                </p>
			</div>
		</div>



	</div>
</div>


