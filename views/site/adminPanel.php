<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="panel">
				<?php $form = ActiveForm::begin(); ?>
						<b>Logged in as ADMIN:</b> <i> <?php print $user->nickname; ?> </i>
								<?= Html::submitButton('Logout', array('name'=>'logout', 'class'=>'login_button')); ?>
				<?php ActiveForm::end(); ?>

</div>
</br>
</br>
<hr>
