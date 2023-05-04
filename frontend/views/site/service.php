<?php
$model = \common\models\Service::find()->one();
$models = \common\models\ServiceCategory::find()->all();
?>
<div class="picman_tm_section" id="service">

	<div class="picman_tm_services">

		<div class="container">
			<div class="row">
				<div class="left_part">
					<div class="desc">
						<h4>Service</h4>
						<h3><?= $model->name ?></h3>
                        <p><?= $model->message ?></p>
					</div>
					<div class="list">
						<ul>
                            <?php foreach ($models as $item): ?>
							<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
								<div class="item">
									<img src="<?= $item->getPhotoSrc() ?>" alt="" class="svg" />
									<h3 class="title"><?= $item->title ?></h3>
									<p class="text"><?= $item->message ?></p>
									<a class="picman_tm_full_link" href="#"></a>
									<img class="popup_service_image" src="img/service/3.jpg" alt="" />
									<div class="service_hidden_details">
										<div class="service_popup_informations">
											<div class="descriptions">
												<p>Dizme is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
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

		<div class="right_part">
			<a class="popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas">
				<img src="img/svg/play.svg" alt="" class="svg">
			</a>
			<div class="main" data-img-url="<?= $model->getPhotoSrc() ?>"></div>
		</div>

	</div>

</div>
