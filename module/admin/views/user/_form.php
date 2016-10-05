<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\User */
/* @var $form yii\widgets\ActiveForm */

$current_timestamp = time(); //timestamp current time
?>

<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'create')->textInput(['maxlength' => true, 'value'=>''.$current_timestamp.'', 'placeholder'=>'d-m-Y'])->label('Create (date create)'); ?>
    <?= $form->field($model, 'role')->textInput(['placeholder'=>'0', 'value'=>'0'])->label('Role (Role User: 0 - simple user(subscriber);  1- admin)') ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
