<?php
$model = \common\models\PricingPlans::find()->limit(3)->orderBy(['id' => SORT_DESC])->all()
?>

<div class="picman_tm_section" id="plans">

	<div class="container">
		<div class="picman_tm_title">
			<h4>Pricing Plans</h4>
			<h3>Photoshoot Plans to Capture Your Best Moments</h3>
		</div>
        <div style="display: flex; justify-content: right; align-items: center">
            <a href="<?= \yii\helpers\Url::to(['pricings' ]) ?>">Barchasini Ko`rish</a>
        </div>
	</div>

	<div class="picman_tm_pricing">
		<div class="container">
			<div class="row">
				<ul class="list">
                    <?php foreach ($model as $value): ?>
					<li class="list_item wow fadeInUp" data-wow-duration="1s" >
						<div class="item">
                            <div class="top_part" style="background-image: url(<?=$value->getPhotoSrc()?>); background-size: cover">
                                <p><?php if ($value->famous == 1){echo 'Popular';} ?></p>
								<h4>Package 01</h4>
								<h3 style="color: #fff"><?=$value->name?></h3>
								<div class="price"><span class="text"><span>$</span><?=$value->price?></span></div>
							</div>
							<div class="bottom_part">
								<p><?= $value->message ?></p>
								<div class="button">
									<a href="<?= \yii\helpers\Url::to(['site/pricing', 'id' => $value->id ]) ?>">Book Now</a>
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
