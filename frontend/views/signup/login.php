<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$modelsd = \common\models\SettingsHome::find()->sort_desc()->one();
?>


<style>
    .bgg{
        background-image: url("<?= $modelsd->getPhotoSrc() ?>");
        background-size: cover;
    }
</style>
<!-- CONTACT -->
<div class="picman_tm_section bgg" id="contact">
    <div class="picman_tm_contact">
        <div class="container">
            <div class="row">

                <!-- Left (contact) -->
                <div class="left_part wow fadeInLeft" data-wow-duration="1s">
                    <div class="left_top">
                        <h3 class="title" style="color: #fff">Contact Us</h3>
                        <!-- Left (feature) -->
                        <div class="left_part">
                            <div class="left_in">
                                <div class="img_1">
                                    <img src="<?= $modelsd->getPhotoSrc() ?>" alt="" />
                                    <div class="main wow fadeInLeft" data-img-url="https://static.review.uz/crop/1/0/736__85_1023202567.jpg?v=1624450678" data-wow-duration="1s"></div>
                                </div>
                                <div class="img_2">
                                    <img src="<?= $modelsd->getPhotoSrc() ?>" alt="" />
                                    <div class="main wow fadeInLeft" data-img-url="https://i2.wp.com/vse-sekrety.ru/uploads/posts/2013-11/1385417670_turagenstvo-02.jpg" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Left (feature) -->                    </div>

                </div>
                <!-- Left (contact) -->

                <!-- RIght (contact) -->
                <div class="right_part wow fadeInRight" id="quote" data-wow-duration="1s">
                    <div class="picman_tm_cform">
                        <h3 class="title">Login</h3>

                        <?php $form = ActiveForm::begin(['errorSummaryCssClass' => 'error-summary alert alert-danger']); ?>

                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>

                        <div class="input_list">
                            <ul>
                                <li>

                                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'password')->passwordInput() ?>

                                </li>
                            </ul>
                        </div>


                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <!-- RIght (contact) -->


            </div>
        </div>
    </div>
</div>
<!-- CONTACT -->
