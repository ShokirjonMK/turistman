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
<?php if (\Yii::$app->session->getFlash('error') !== null) : ?>
    <span class="alert alert-info alert-dismissible" role="alert" style="z-index: 9999; position: absolute; top: 0; left: 0;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('error') ?>
        </span>
<?php endif; ?>
<!-- CONTACT -->
<div class="picman_tm_section bgg" id="contact">
    <div class="picman_tm_contact">
        <div class="container">
            <div class="rows">

                <!-- Left (contact) -->
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
                                    <?= $form->field($model, 'sera_num')->textInput(['autofocus' => true, 'placeholder'=>'passport seria va raqam'])->label(false) ?>
                                    <?= $form->field($model, 'date')->Input('date',['autofocus' => true])->label(false) ?>
                                    <?php echo $form->errorSummary($model); ?>
                                </li>
<!--                                <li><input id="phone" type="number" placeholder="Your Phone" /></li>-->
                            </ul>
                        </div>


                        <div class="form-group">
							<?= Html::submitButton('ruyxatdan utish', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

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
