<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropdownList(
        ['M' => 'Male', 'F' => 'Female'], 
        ['prompt' => '--Select Gender--']) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
