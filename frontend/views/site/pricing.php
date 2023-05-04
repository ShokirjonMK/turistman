<?php
$model = \common\models\PricingPlans::find()->all()
?>

<div class="picman_tm_section" id="plans">

	<div class="container">
		<div class="picman_tm_title">
			<h4>Pricing Plans</h4>
			<h3>Photoshoot Plans to Capture Your Best Moments</h3>
		</div>
	</div>

	<div class="picman_tm_pricing">
		<div class="container">
			<div class="row">
				<ul class="list">
                    <?php foreach ($model as $value): ?>
					<li class="list_item wow fadeInUp" data-wow-duration="1s">
						<div class="item">
							<div class="top_part">
                                <p><?php if ($value->famous == 1){echo 'Popular';} ?></p>
								<h4>Package 01</h4>
								<h3><?=$value->name?></h3>
								<div class="price"><span class="text"><span>$</span><?=$value->price?></span></div>
							</div>
							<div class="bottom_part">
								<p><?= $value->message ?></p>
								<div class="button">
									<a href="#">Book Now</a>
								</div>
							</div>
						</div>
					</li>
                    <?php endforeach; ?>

				</ul>
			</div>
		</div>
	</div>

</div>
