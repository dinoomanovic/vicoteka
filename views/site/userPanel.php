<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<?php $form = ActiveForm::begin(); ?>
<h1>Uspješno ste logovani kao <?php print $user->nickname; ?> </h1>
<?= Html::submitButton('Logout', array('name'=>'logout', 'class'=>'logout_button')); ?>
<?php ActiveForm::end(); ?>
