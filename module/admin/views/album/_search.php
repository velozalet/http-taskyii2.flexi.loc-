<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\AlbumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="album-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id')->textInput(['placeholder'=>'ID'])->label('') ?>
    <?= $form->field($model, 'src')->textInput(['placeholder'=>'src'])->label('') ?>
    <?= $form->field($model, 'alt')->textInput(['placeholder'=>'alt'])->label('') ?>
    <?= $form->field($model, 'create')->textInput(['placeholder'=>'create'])->label('') ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
