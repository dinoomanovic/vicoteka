<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="home">
			<?php $form = ActiveForm::begin(); ?>
			<br>
			<?= Html::submitButton('Login', array('name'=>'login', 'class'=>'login_button')); ?>
			&nbsp
			<?= Html::submitButton('Register', array('name'=>'register', 'class'=>'register_button')); ?>
			
			<?php ActiveForm::end(); ?>
</div>
</br>
</br>
<hr>

<?= $this->render('categories', ['categories'=>$categories]); ?>

<?= $this->render('jokes',['jokes'=>$jokes]); ?>