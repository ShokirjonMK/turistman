<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\BlogComment $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="blog-comment-form">

    <?php $form = ActiveForm::begin([
    'id' => 'BlogComment',
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
            

<!-- attribute user_id -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'user_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(common\models\User::find()->all(), 'id', 'id'),
    [
        'prompt' => Yii::t('cruds', 'Select'),
        'disabled' => (isset($relAttributes) && isset($relAttributes['user_id'])),
    ]
); ?>

<!-- attribute blog_id -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'blog_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(common\models\Blog::find()->all(), 'id', 'title'),
    [
        'prompt' => Yii::t('cruds', 'Select'),
        'disabled' => (isset($relAttributes) && isset($relAttributes['blog_id'])),
    ]
); ?>

<!-- attribute status -->
			<?= $form->field($model, 'status')->textInput() ?>

<!-- attribute is_deleted -->
			<?= $form->field($model, 'is_deleted')->textInput() ?>

<!-- attribute message -->
			<?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

<!-- attribute date -->
			<?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'BlogComment'),
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

