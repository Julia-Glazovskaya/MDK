<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'predmet')->textInput(['maxlength' => true]) ?>
    <?php
  echo $form->field($model, 'description')->dropDownList([
'DZ'=>'ДЗ',
'LAB'=>'ЛАБ']);
?>




    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
