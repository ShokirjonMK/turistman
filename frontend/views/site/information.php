<?php
$model = \common\models\Information::find()->one()
?>

<div class="picman_tm_section" id="information">
	<div class="picman_tm_information">
		<div class="container">
			<div class="row">

				<!-- Left Side (information) -->
				<div class="left_box">
					<div class="desc">
						<h4>Photographer by born</h4>
						<h3><?=$model->name_uz?></h3>
						<p><?= $model->description_uz ?></p>
					</div>
					<div class="counter_list">
						<ul>
							<li>
								<div class="item">
									<h3><span class="picman_tm_counter" data-from="0" data-to="<?= $model->photos ?>" data-speed="2000">0</span><sup>+</sup></h3>
									<h4>Photoshoot Per Months</h4>
								</div>
							</li>
							<li>
								<div class="item">
									<h3><span class="picman_tm_counter" data-from="0" data-to="<?= $model->the_world ?>" data-speed="2000">0</span>K</h3>
									<h4>Clients<br />Worldwide</h4>
								</div>
							</li>
							<li>
								<div class="item">
									<h3><span class="picman_tm_counter" data-from="0" data-to="15" data-speed="2000">0</span></h3>
									<h4>Awards &amp; Photo Achivements</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Left Side (information) -->


				<!-- Right Side (information) -->
				<div class="right_box">
					<span class="line_a"></span>
					<span class="line_b"></span>
					<span class="line_c"></span>
					<span class="line_d"></span>
					<div class="img">
						<img src="img/thumbs/1-1.jpg" alt="">
						<div class="main" data-img-url="<?= $model->getPhotoSrc() ?>"></div>
					</div>
				</div>
				<!-- Right Side (information) -->


			</div>
		</div>
	</div>
</div>
