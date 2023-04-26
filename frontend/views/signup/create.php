<?php

/**
 * @var yii\web\View $this
 * @var common\models\SettingsHome $model
 * @var yii\widgets\ActiveForm $form
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$modelsd = \common\models\SettingsHome::find()->sort_desc()->one();
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
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
                        <h3 class="title">Registratsiya</h3>

                        <?php $form = ActiveForm::begin(['errorSummaryCssClass' => 'error-summary alert alert-danger']); ?>

                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>

                        <div class="input_list">
                            <ul>
                                <li>

                                    <?= $form->field($model, 'sera_num')->textInput(['autofocus' => true])->label(false) ?>
                                    <?= $form->field($model, 'date')->Input('date',['autofocus' => true])->label(false) ?>
                                    <?php echo $form->errorSummary($model); ?>
                                </li>
                                <li><input id="phone" type="number" placeholder="Your Phone" /></li>
                            </ul>
                        </div>


                        <div class="form-group">
                            <?= Html::submitButton(
                                '<span class="glyphicon glyphicon-check"></span> ' .
                                ($model->isNewRecord ? Yii::t('cruds', 'Create') : Yii::t('cruds', 'Save')),
                                [
                                    'id' => 'save-' . $model->formName(),
                                    'class' => 'btn btn-success'
                                ]
                            );
                            ?>                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <!-- RIght (contact) -->


            </div>
        </div>
    </div>
</div>
<!-- CONTACT -->
