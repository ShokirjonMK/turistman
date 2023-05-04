<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Information $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="information-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Information',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute description_uz -->
			<?= $form->field($model, 'description_uz')->textarea(['rows' => 6]) ?>

<!-- attribute description_ru -->
			<?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>

<!-- attribute photos -->
			<?= $form->field($model, 'photos')->textInput() ?>

<!-- attribute the_world -->
			<?= $form->field($model, 'the_world')->textInput() ?>

<!-- attribute status -->
			<?= $form->field($model, 'status')->textInput() ?>

<!-- attribute is_deleted -->
			<?= $form->field($model, 'is_deleted')->textInput() ?>

<!-- attribute name_uz -->
			<?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

<!-- attribute name_ru -->
			<?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

<!-- attribute image -->
			<?= $form->field($model, 'photoFile')->widget(FileInput::class,
				[
					'pluginOptions' => [
						'showPreview' => false,
						'showCaption' => true,
						'showRemove' => true,
						'showUpload' => false,
					]
				]); ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Information'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? Yii::t('cruds', 'Create') : Yii::t('cruds', 'Save')),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

