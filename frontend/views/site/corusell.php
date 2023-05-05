<?php
$model = \common\models\Portfolyo::find()->all();
?>

<div class="picman_tm_section" id="portfolio">

	<div class="container">
		<div class="picman_tm_title">
			<h4>Portfolio</h4>
			<h3>Check out some of my amazing clicks</h3>
		</div>
	</div>

	<div class="picman_tm_porfolio_wrap">

		<!-- Moving Title -->
		<div class="picman_tm_portfolio_titles"></div>
		<!-- Moving Title -->

		<div class="picman_tm_portfolio" data-width="400" data-gap="24">

            <?php foreach ($model as $value): ?>
			<div class="even items">
				<div class="image" data-title="Motivation Picnik" data-category="Vimeo">
                    <a href="<?= \yii\helpers\Url::to(['portfolyo', 'id'=> $value->id ], true) ?>">
					<div class="img_in">
						<img src="<?= $value->getPhotoSrc() ?>" alt="">
						<div class="main" data-img-url="<?= $value->getPhotoSrc() ?>"></div>
					</div>
                    </a>
				</div>
			</div>
         <?php endforeach; ?>
		</div>
	</div>


</div>
