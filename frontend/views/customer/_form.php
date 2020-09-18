<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

 

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('Please enter your name') ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->hint('Please enter your Last name') ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->hint('Please enter your Address') ?>

    <?= $form->field($model, 'email')->input('email')->hint('Please enter your email') ?>

    <?= $form->field($model, 'phone')->input('number',['maxlength' => true])->hint('Please enter your phone or tel') ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
