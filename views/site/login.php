
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<div class= "login">
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<p align="center">
<?= Html::submitButton('Login', array('name'=>'login', 'class'=>'login_button')); ?>
</p>
<?php ActiveForm::end(); ?>
</div>
