<?php
$model = \common\models\Features::find()->one()
?>

<div class="picman_tm_section" id="feature">

	<div class="picman_tm_feature">
		<div class="container">
			<div class="row">

				<!-- Left (feature) -->
				<div class="left_part">
					<div class="left_in">
						<div class="img_1">
							<img src="img/thumbs/3-4.jpg" alt="" />
							<div class="main wow fadeInLeft" data-img-url=" <?=$model->getPhotoSrc()?> " data-wow-duration="1s"></div>
						</div>
						<div class="img_2">
							<img src="img/thumbs/1-1.jpg" alt="" />
							<div class="main wow fadeInLeft" data-img-url="<?=$model->getPhotoSrcBanner()?>" data-wow-duration="1s" data-wow-delay="0.2s"></div>
						</div>
					</div>
				</div>
				<!-- Left (feature) -->


				<!-- Right (feature) -->
				<div class="right_part">

					<!-- Description (feature/right) -->
					<div class="desc">
						<h4>Features</h4>
						<h3><?= $model->name ?></h3>
                        <p><?= $model->message ?></p>
					</div>
					<!-- Description (feature/right) -->


					<!-- Accordion (feature/right) -->
					<div class="acc_holder">
						<div class="picman_tm_accordion" data-active="1" data-type="accordion">
							<div class="accordion_in">
								<div class="acc_head">
									<span class="plus"></span>
									<p>Camera &amp; Equipments</p>
								</div>
								<div class="acc_content">
									<div class="acc_content_in">
										<p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita tumi sopono carini hoye.</p>
									</div>
								</div>
							</div>
							<div class="accordion_in">
								<div class="acc_head">
									<span class="plus"></span>
									<p>Work Eticks &amp; Complimency</p>
								</div>
								<div class="acc_content">
									<div class="acc_content_in">
										<p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita tumi sopono carini hoye.</p>
									</div>
								</div>
							</div>
							<div class="accordion_in">
								<div class="acc_head">
									<span class="plus"></span>
									<p>Strategy to Achive Goal</p>
								</div>
								<div class="acc_content">
									<div class="acc_content_in">
										<p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita tumi sopono carini hoye.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Accordion (feature/right) -->


				</div>
				<!-- Right (feature) -->


			</div>
		</div>
	</div>

</div>
