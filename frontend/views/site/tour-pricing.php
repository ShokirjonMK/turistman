<?php

?>

<style>
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="picman_tm_section" id="plans">

	<div class="container">
		<div class="picman_tm_title">
			<h4>Pricing Plans</h4>
			<h3>Tanlangan tarifning malumoti</h3>
		</div>
	</div>

	<div class="picman_tm_pricing">
		<div class="container">
			<div class="row" style="display: flex;">
				<div class="list_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
					<div class="item popular">
						<div class="top_part">
							<p>Popular</p>
							<h4>Package 02</h4>
							<h3>Umrah</h3>
							<div class="price"><span class="text"><span>$</span>1700</span></div>
						</div>
						<div class="bottom_part">
							<p>12 hour duration</p>
							<p>200 personal photograph</p>
							<p>3 edited video</p>
							<p>40 printed copy</p>
							<p>2 digital album</p>
							<div class="button">
								<a href="#">Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tour-price-desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam expedita rem, delectus
						illo tempora natus accusantium nostrum debitis soluta blanditiis sunt reiciendis
						deserunt quasi fugit hic praesentium incidunt nobis quam.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam expedita rem, delectus
						illo tempora natus accusantium nostrum debitis soluta blanditiis sunt reiciendis
						deserunt quasi fugit hic praesentium incidunt nobis quam.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam expedita rem, delectus
						illo tempora natus accusantium nostrum debitis soluta blanditiis sunt reiciendis
						deserunt quasi fugit hic praesentium incidunt nobis quam.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam expedita rem, delectus
						illo tempora natus accusantium nostrum debitis soluta blanditiis sunt reiciendis
						deserunt quasi fugit hic praesentium incidunt nobis quam.</p>



                </div>
			</div>
		</div>
	</div>

</div>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>