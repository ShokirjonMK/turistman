<?php

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
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
                        <div class="top_part" style="background-image: url('https://www.shutterstock.com/image-illustration/technology-background-abstract-digital-combination-260nw-1795415125.jpg')">
                            <p>Popular</p>
                            <h4>Package 02</h4>
                            <h3 style="color: #fff">Umrah</h3>
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

                    <!-- Mijozlarning qoldirgan izohi -->
                    <div class="row">
                        <div style="text-align: center; margin: 30px 0 30px 0;">
                            <h5>
                                Mijozlar tomonidan qoldirilgan izohlar
                            </h5>
                        </div>


                        <!-- carausel -->
                        <div id="default-carousel" class="relative w-full" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                <div class="tourstman-description hidden duration-700 ease-in-out"
                                     data-carousel-item="active" data-carousel-item>
                                    <div class="description">
                                        <div>
                                            <i class="fas fa-quote-left" style="color: red;"></i>
                                            <p style="font-size: 14px;">Sed ut perspiciatis unde omnis iste
                                                natus error sit
                                                voluptatem accusantium dolor emque laudantium, totam rem aperiam
                                                eaque ipsa
                                                quae ab illo inventore.</p>

                                        </div>
                                        <b>To'lqin muxtorov, <span
                                                    style="color: darkgrey;">Photograph</span></b>
                                    </div>
                                    <div class="tourstman-images">
                                        <img src="<?= \yii\helpers\Url::to(['/img/slider/4.jpg']) ?>" alt="">
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="tourstman-description hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <div class="description">
                                        <div>
                                            <i class="fas fa-quote-left" style="color: red;"></i>
                                            <p style="font-size: 14px;">Sed ut perspiciatis unde omnis iste
                                                natus error sit
                                                voluptatem accusantium dolor emque laudantium, totam rem aperiam
                                                eaque ipsa
                                                quae ab illo inventore.</p>

                                        </div>
                                        <b>To'lqin muxtorov, <span
                                                    style="color: darkgrey;">Photograph</span></b>
                                    </div>
                                    <div class="tourstman-images">
                                        <img src="<?= \yii\helpers\Url::to(['/img/slider/4.jpg']) ?>" alt="">
                                    </div>
                                </div>


                            </div>
                            <!-- Slider indicators -->
                            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                        <span
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg aria-hidden="true"
                                                 class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                                 stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                            <span class="sr-only">Previous</span>
                                        </span>
                            </button>
                            <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                        <span
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg aria-hidden="true"
                                                 class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                                 stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 5l7 7-7 7"></path>
                                            </svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
