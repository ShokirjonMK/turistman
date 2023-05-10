<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>




<!-- PRELOADER -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="picman_tm_all_wrap" data-magic-cursor="show">

    <!-- SETTINGS -->
    <div class="picman_tm_settings">
        <div class="icon">
            <img class="svg" src="<?= \yii\helpers\Url::to(['img/svg/settings/setting.svg'])?>" alt="" />
            <a class="link" href="<?= \yii\helpers\Url::to(['/'], true) ?>"></a>
        </div>
        <div class="wrapper">
            <span class="title">Unlimited Colors</span>
            <ul class="colors">
                <li><a href="#" data-color="#4169e1"></a></li>
                <li><a href="#" data-color="#66B95C"></a></li>
                <li><a href="#" data-color="#ff9800"></a></li>
                <li><a href="#" data-color="#ff5e94"></a></li>
                <li><a href="#" data-color="#ff4522"></a></li>
                <li><a href="#" data-color="#333"></a></li>
                <li><a href="#" data-color="#9200ee"></a></li>
                <li><a href="#" data-color="#00D4BD"></a></li>
                <li><a href="#" data-color="#5e9e9f"></a></li>
                <li><a href="#" data-color="#e65f78"></a></li>
                <li><a href="#" data-color="#666d41"></a></li>
                <li><a href="#" data-color="#fe0000"></a></li>
                <li class="picker"><input type="text" value="#e80000" /></li>
            </ul>
            <span class="title">Magic Cursor</span>
            <ul class="cursor">
                <li><a class="showme show" href="#"></a></li>
                <li><a class="hide" href="#"><img class="svg" src="<?= \yii\helpers\Url::to(['img/svg/settings/arrow.svg'])?>" alt="" /></a></li>
            </ul>
        </div>
    </div>
    <!-- /SETTINGS -->

    <!-- HEADER -->
    <div class="picman_tm_header">
        <div class="container">
            <div class="inner">
                <div class="logo">
                    <a href="<?= \yii\helpers\Url::to(['/'], true) ?>"><img src="<?= \yii\helpers\Url::to(['img/logo/logooo.png'])?>" alt="" /></a>
                </div>
                <div class="menu">
                    <ul class="anchor_nav">
                        <li class="current"><a href="<?= \yii\helpers\Url::to(['/'], true) ?>"><?= Yii::t('ui', 'Home') ?></a></li>
                        <li><a href="#about"><?= Yii::t('ui', 'About') ?></a></li>
                        <li><a href="#portfolio"><?= Yii::t('ui', 'Service') ?></a></li>
                        <li><a href="#blog"><?= Yii::t('ui', 'Blog') ?></a></li>
                        <li><a href="#contact"><?= Yii::t('ui', 'Contact') ?></a></li>
                        <?php if (!Yii::$app->user->isGuest): ?>
                        <li class="button"><a href="<?= \yii\helpers\Url::to(['site/logout'], true) ?>"><span><?= Yii::t('ui', 'Chiqish') ?></span></a></li>
                        <?php else: ?>
                        <li class="button"><a href="<?= \yii\helpers\Url::to(['signup/create'], true) ?>"><span><?= Yii::t('ui', 'Access') ?></span></a></li>
						<?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER -->


    <!-- MOBILE MENU -->
    <div class="picman_tm_mobile_menu">
        <div class="mobile_menu_inner">
            <div class="mobile_in">
                <div class="logo">
                    <a href="index.html"><img src="img/logo/logooo.png" alt="" /></a>
                </div>
                <div class="trigger">
                    <div class="hamburger hamburger--slider">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <div class="dropdown_inner">
                <ul class="anchor_nav">
                    <li class="current"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="button"><a href="#quote"><span>Get A Quote</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /MOBILE MENU -->


    <!-- SOCIAL -->
    <div class="picman_tm_social">
        <ul>
            <li class="facebook"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/facebook.svg'])?>" alt="" class="svg"></a></li>
            <li class="twitter"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/twitter.svg'])?>" alt="" class="svg"></a></li>
            <li class="linkedin"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/linkedin.svg'])?>" alt="" class="svg"></a></li>
            <li class="instagram"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/instagram.svg'])?>" alt="" class="svg"></a></li>
        </ul>
    </div>
    <!-- SOCIAL -->
    <!-- HEADER -->


<?=$content?>
<!-- FOOTER -->
<footer class="picman_tm_footer" id="footer">
    <div class="container">

        <!-- Top (footer) -->
        <div class="footer_top">
            <ul class="list">

                <!-- 1st item (footer/top) -->
                <li class="list_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="item">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo/logooo.png" alt="" /></a>
                        </div>
                        <div class="desc">
                            <p>Seisi ut aliquip ex ea commodo co tuiki kokhono janti iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                </li>
                <!-- 1st item (footer/top) -->

                <!-- 2nd item (footer/top) -->
                <li class="list_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="item">
                        <div class="list_title">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="picman_tm_subscribe">
                            <div class="sub_form">
                                <input type="text" placeholder="Your email" />
                                <a href="#">
                                    <img src="<?= \yii\helpers\Url::to(['img/svg/mail.svg'])?>" alt="" class="svg">
                                </a>
                            </div>
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon." data-message="You have subscribed to our updates. Thank you"></div>
                            <div class="empty_notice"><span>Please enter your Email</span></div>
                        </div>
                    </div>
                </li>
                <!-- 2nd item (footer/top) -->

                <!-- 3rd item (footer/top) -->
                <li class="list_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="item">
                        <div class="list_title">
                            <h3>Follow me</h3>
                        </div>
                        <div class="picman_tm_h_social">
                            <ul>
                                <li class="facebook"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/facebook.svg'])?>" alt="" class="svg"></a></li>
                                <li class="twitter"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/twitter.svg'])?>" alt="" class="svg"></a></li>
                                <li class="linkedin"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/linkedin.svg'])?>" alt="" class="svg"></a></li>
                                <li class="instagram"><a href="#"><img src="<?= \yii\helpers\Url::to(['img/svg/instagram.svg'])?>" alt="" class="svg"></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- 3rd item (footer/top) -->

            </ul>
        </div>
        <!-- Top (footer) -->

        <!-- Bottom (footer) -->
        <div class="footer_bottom">
            <div class="copyright wow fadeInUp" data-wow-duration="1s">
                <p>Designed with love by <a href="https://t.me/ShokirjonMK" target="_blank">ShokirjonMK</a> &copy; <?= date('Y') ?></p>
            </div>
            <div class="help_link wow fadeInUp" data-wow-duration="1s">
                <ul>
                    <li><a href="#">Terms &amp; Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <!-- Bottom (footer) -->

    </div>
</footer>
    <!-- MAGIC CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- MAGIC CURSOR -->


    <!-- TOTOP -->
    <div class="progressbar">
        <a href="#"><span class="text">To Top</span></a>
        <span class="line"></span>
    </div>
    <!-- TOTOP -->
</div>
<!-- FOOTER -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

