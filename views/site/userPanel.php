<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="panel">
				<?php $form = ActiveForm::begin(); ?>
						<b>Dobrodošli KORISNIK:</b> <i> <?php print $user->nickname; ?> </i>
						<br>
						<?= Html::submitButton('Logout', array('name'=>'logout', 'class'=>'login_button')); ?>
						<hr>
				<?php ActiveForm::end(); ?>
</div>
