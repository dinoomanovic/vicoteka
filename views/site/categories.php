<?php

	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;

?>

<div class="categories">
		<?php foreach($categories as $category){ ?>

		<?php $form = ActiveForm::begin(); ?>
			
				<?= Html::submitButton($category->name, array('name'=>$category->name, 'class'=>'category_button')); ?>
			<br>
		<?php ActiveForm::end(); ?>

		<?php } ?>
</div>