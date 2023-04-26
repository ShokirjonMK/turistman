<?php

use dmstr\bootstrap\Tabs;
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\SettingsHome $model
*/

$this->title = Yii::t('models', 'Settings Home');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Settings Homes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-home-form">

	<?php $form = ActiveForm::begin([
			'id' => 'SettingsHome',
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


            <!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'photoFile')->widget(FileInput::class,
				[
					'pluginOptions' => [
						'showPreview' => false,
						'showCaption' => true,
						'showRemove' => true,
						'showUpload' => false,
					]
				]); ?>

            <!-- attribute status -->
			<?= $form->field($model, 'status')->textInput() ?>

            <!-- attribute is_deleted -->

            <!-- attribute imageBanner -->

        </p>
		<?php $this->endBlock(); ?>

		<?=
		Tabs::widget(
			[
				'encodeLabels' => false,
				'items' => [
					[
						'label'   => Yii::t('models', 'SettingsHome'),
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
