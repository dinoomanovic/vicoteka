<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Kreiraj kategoriju';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="category">
<br>
<p align="center">
  <?php $form = ActiveForm::begin() ?>



    <?= $form->field($category, 'name')->textInput(['autofocus'=>true]) ?>
  </p>
</br>

  <p align="center" >
  <?= Html::submitButton('Kreiraj' , ['class' =>  'btn btn-primary' ]) ?>
</p>

<?php ActiveForm::end(); ?>


</div>
