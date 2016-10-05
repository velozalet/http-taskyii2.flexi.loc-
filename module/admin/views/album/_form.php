<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\Album */
/* @var $form yii\widgets\ActiveForm */

$current_timestamp = time(); //timestamp current time(like this: 1466364181)
?>

<div class="album-form">
    <?php $form = ActiveForm::begin( ['options'=>['enctype'=>'multipart/form-data']]); ?>
    <?= $form->field($model, 'file')->fileInput()->label('<span class="label_upload_img">Add Image (upload image in [web/uploads]:</span>'); ?>
    <?=$form->field($model, 'src')->hiddenInput(['value'=>''])->label(''); ?>
        <?= $form->field($model, 'src_fake')->textInput(['maxlength'=>true, 'disabled'=>'disabled'])->label('Src (path to image in @web/uploads/)') ?>
    <?= $form->field($model, 'alt')->textInput(['maxlength'=>true])->label('Alt (description image)') ?>
    <?=$form->field($model, 'create')->hiddenInput(['value'=>''.$current_timestamp.''])->label(''); ?>
        <?= $form->field($model, 'create_fake')->textInput(['maxlength'=>true, 'value'=>''.$current_timestamp.'', 'disabled'=>'disabled'])->label('Create (date create)'); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class'=>$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
