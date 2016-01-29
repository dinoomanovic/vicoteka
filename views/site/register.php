<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<div class= "login">
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'nickname')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'password')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

<?= Html::submitButton('Save', array('name'=>'save', 'class'=>'login_button')); ?>

</div>