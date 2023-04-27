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
            <div class="rows">


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
