<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\module\admin\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <hr>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            'password',
            'create',
            'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>







<!-- --------------------------------------------------------------------------------------- -->
<br><br><br><br><br><br><br>
<div class="row">
    <code> <sub><b>Path to this view: </b> <?= __FILE__ ?> </sub></code>
    <br>
    <!--а так можно рендерить другие views в эту view -->
    <?php //echo \Yii::$app->view->renderFile('@app/views/site/hello.php'); ?>
    <?php //echo \Yii::$app->view->renderFile('@app/views/site/about.php'); ?>
    <!--/а так можно рендерить другие views в эту view -->

    <code> <sub><b>ID Controller: </b> <?= $this->context->action->uniqueId ?> </sub></code> <br>
    <code> <sub><b>ID Controller: </b> <?= $this->context->id ?> </sub></code> <br>
    <code> <sub><b>Controller Class: </b> <?= get_class($this->context) ?> </sub></code> <br>
    <code> <sub><b>This is the view content for action: </b> <?= $this->context->action->id ?> </sub></code> <br>
    <code> <sub><b>ID module: </b> <?= $this->context->module->id ?> </sub></code>
</div>

<?php
//var_dump($message);
?>