<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;  //use yii\bootstrap\ActiveForm;
use yii\base\Model;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;

/** ______________________________________________________REGISTRATION FORM */
?>

<?php
$this->title = 'Registration'; //title for browser tabs for this page
$this->params['breadcrumbs'][] = $this->title; //breadcrumbs
?>

<div class="site-index">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
</div>

    <br>
<!-- --------------------------------------------------------------------------------------- -->
<!-- FORM REGISTR USER -->
<div class="row">
    <div class="col-sm-4 col-lg-offset-4">
<?php $form = ActiveForm::begin([
    'id' => 'login-form-user',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        //'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'labels_form_signup'],
    ],
]); /*or  $form = ActiveForm::begin();*/
?>
    <?= $form->field($signup_model, 'username')->textInput(['autofocus'=>true, 'placeholder'=>'Username'])->label('Username') ?>
    <?= $form->field($signup_model, 'email')->textInput(['placeholder'=>'Email'])->label('Email') ?>
    <?= $form->field($signup_model, 'password')->passwordInput(['placeholder'=>'Password'])->label('Password') ?>

    <div class="form-group">
        <?= Html::submitButton('Sign Up', ['name' => 'form-button-registr', 'class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
    </div>  <!--/<div class="col-sm-4">-->
</div>  <!--/<div class="row"> -->
<!--/FORM REGISTR USER -->



    <!-- --------------------------------------------------------------------------------------- -->
    <br><br><br><br><br><br><br>
    <div class="row">
        <code> <sub><b>Path to this view: </b> <?= __FILE__ ?> </sub></code>
        <br>
        <!--а так можно рендерить другие views в эту view -->
        <?php //echo \Yii::$app->view->renderFile('@app/views/site/hello.php'); ?>
        <?php //echo \Yii::$app->view->renderFile('@app/views/site/about.php'); ?>
        <!--/а так можно рендерить другие views в эту view -->

        <code> <sub><b>ID Controller: </b> <?= $this->context->id ?> </sub></code> <br>
        <code> <sub><b>Controller Class: </b> <?= get_class($this->context) ?> </sub></code> <br>
        <code> <sub><b>This is the view content for action: </b> <?= $this->context->action->id ?> </sub></code> <br>
        <code> <sub><b>ID module: </b> <?= $this->context->module->id ?> </sub></code>
    </div>

<?php
//var_dump($message);
?>