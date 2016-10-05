<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search hh">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id')->textInput(['placeholder'=>'ID'])->label('') ?>
    <?= $form->field($model, 'username')->textInput(['placeholder'=>'username'])->label('') ?>
    <?= $form->field($model, 'email')->textInput(['placeholder'=>'email'])->label('') ?>
    <?= $form->field($model, 'password')->textInput(['placeholder'=>'password'])->label('') ?>
    <?= $form->field($model, 'create')->textInput(['placeholder'=>'create'])->label('')  ?>
    <?= $form->field($model, 'role')->textInput(['placeholder'=>'role'])->label('') ?>
    <?php // echo $form->field($model, 'role') ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
