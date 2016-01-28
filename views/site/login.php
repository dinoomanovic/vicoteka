
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class= "login">
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<?= Html::submitButton('Login', array('name'=>'login', 'class'=>'login_button')); ?>
<<<<<<< HEAD
=======

</div>
>>>>>>> origin/master
