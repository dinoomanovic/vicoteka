
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Admin Panel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-form">
<?php $form = ActiveForm::begin(); ?>
<h1>Uspješno ste logovani kao <?php print $user->nickname;?></h1>
<br>
<?= Html::a('Kreiraj kategoriju', ['category'], ['class' => 'btn btn-primary']) ?>
</br>
<br>
<br>
<div class="form-group">
  <?= Html::submitButton('Logout', array('name'=>'logout', 'class'=>'btn logout_button')); ?>
</div>
<?php ActiveForm::end(); ?>

<div class="panel">
				<?php $form = ActiveForm::begin(); ?>
						<b>Logged in as ADMIN:</b> <i> <?php print $user->nickname; ?> </i>
								<?= Html::submitButton('Logout', array('name'=>'logout', 'class'=>'login_button')); ?>
				<?php ActiveForm::end(); ?>

</div>
</br>
</br>
<hr>
