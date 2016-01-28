<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Kreiraj kategoriju';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="posts-form">

  <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($category, 'categoryID')->textInput() ?>

    <?= $form->field($category, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($category->isNewRecord ? 'Kreiraj' : 'Izmjeni', ['class' => $category->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

</div>
