<?php

/* @var $this yii\web\View */
$model = \common\models\SettingsHome::find()->all();
$modelOne = \common\models\SettingsHome::find()->sort_desc()->one();
$this->title = 'Home';
?>



<!-- HERO -->
<div class="picman_tm_hero" id="home">

    <div class="overlay"></div>

    <!-- Gallery List (hero) -->
    <div class="gallery_list_wrap">
        <ul>
            <li class="active"><div class="main" data-img-url="<?= $modelOne->getPhotoSrc()?> "></div></li>
			<?php foreach ($model as $value): ?>
            <li><div class="main" data-img-url="<?= $value->getPhotoSrc() ?>"></div></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- Gallery List (hero) -->

    <!-- Projects (hero) -->
    <div class="project_list_wrap">
        <div class="container">
            <div class="inner_wrap">

                <!-- Left Circle Box (hero) -->
                <div class="left_box">
                    <!-- <h4>Hello, I'm</h4> -->
                    <h3> <?= Yii::t('ui', 'Tourist' )?> </h3>
                    <h5><?= Yii::t('ui', 'TOUR AND TRAVEL') ?></h5>
                    <div class="booking">
                        <a href="#contact" class="button"><span><?= Yii::t('ui', 'View Plans')?></span></a>
                    </div>
                </div>
                <!-- Left Circle Box (hero) -->


                <!-- Right List (hero) -->
                <div class="right_box">
                    <ul class="list">
                        <li>
                            <div class="list_inner">
                                <h3><a></a></h3>
                            </div>
                        </li>
                        <?php foreach ($model as $value): ?>
                        <li>
                            <div class="list_inner">
                                <h3><a><?= $value->name ?></a></h3>
                            </div>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
                <!-- Right List (hero) -->

            </div>
        </div>
    </div>
    <!-- Projects (hero) -->

    <!-- Down Button (hero) -->
    <div class="picman_tm_down">
        <a class="anchor" href="#about">
            <img src="img/svg/down.svg" alt="" class="svg" />
        </a>
    </div>
    <!-- Down Button (hero) -->

</div>
<!-- HERO -->



