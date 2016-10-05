<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\Album */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="album-form-update">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'src')->textInput(['maxlength'=>true])->label('Src (path to image in @web/)'); ?>
    <?= $form->field($model, 'alt')->textInput(['maxlength'=>true])->label('Alt (description image)'); ?>
    <?= $form->field($model, 'create')->textInput(['maxlength'=>true])->label('Create (date create)'); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class'=>$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
