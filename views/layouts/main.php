<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php']);  ?> <!--Meta tags-->
    <?= Html::csrfMetaTags() ?> <!--защита от ложных запросов с др.сайтов. csrf сод.спец.ключ по которому Yii понимает,что запрос идет именно с этого приложения-->
    <?php // $this->title = 'Home'; title for tab this layout ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--IDENTITY if User logined-->
<?php
echo '<br><br>';
if(Yii::$app->user->identity) {  //if user is authentication his data in component Yii::$app->user->identity
//    echo '<br>';
//    echo Yii::$app->user->identity['username']; echo '<br>';
//    echo Yii::$app->user->identity['email']; echo '<br>';
//    echo Yii::$app->user->identity['id'];  echo '<br>';
//    echo Yii::$app->user->identity->getId();  echo '<br>';
//    echo Yii::$app->user->identity['role'];  echo '<br>';
//    echo date('d-m-Y', Yii::$app->user->identity['create']);
}
?>
<!--/IDENTITY if User logined-->

<!--SESSION DATA-->
<?php
//$session = Yii::$app->session; var_dump($session->get('logined_user')); - если что-то писали в сессию

if( $msg_signup = Yii::$app->session->getFlash('success_signup') ):  //flash message from session for successfully signed up of user
    echo '<p class="flash_msg text-center"><span class="text-success">'.$msg_signup.'</span></p>';
endif;

if( $msg_login = Yii::$app->session->getFlash('success_login') ):  //flash message from session for successfully login of user
    echo '<p class="flash_msg text-center"><span class="text-success">'.$msg_login.' <b><i>'.Yii::$app->user->identity['username'].'!</i></b> </span></p>';
endif;
?>
<!--/SESSION DATA-->


<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'LITTUS', //<a href="http://i.ua" target="_blank">FLEXI</a>
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right main_navbsr'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
        //if user is not guest(when user is logged) - show tab "Gallery"
            !Yii::$app->user->isGuest ? ['label' => 'Gallery', 'url' => ['/album/index']]  : '',
            ['label' => 'Contact', 'url' => ['/site/contact']],
            //['label' => 'Registration', 'url' => ['/user/signup']],
            //['label' => 'Login', 'url' => ['/user/login']],
        //if user is not guest(when user is logged) and his is Admin(role=1) - show tab "Admin"
            ( !Yii::$app->user->isGuest && Yii::$app->user->identity->role == 1 ) ?
                ['label' => 'Admin Panel',
                    'items'=> [
                        ['label'=>'Admin Home', 'url'=>['/admin'], 'options'=>['class'=>'test11'] ],
                        ['label'=>'', 'url'=>['/'], 'options'=>['class'=>'divider'] ],  //visual divider
                        ['label'=>'Users', 'url'=>['/admin/user']],
                        ['label'=>'Gallery', 'url'=>['/admin/album']],
                        ['label'=>'Something else', 'url'=>['/admin/else']],
                    ],
                ] : '',

            Yii::$app->user->isGuest ? (
                //['label' => 'Login', 'url' => ['/site/login']]
            ['label' => 'Login', 'url' => ['/user/login']]
            ) : (
                    '<li>'
                    . Html::beginForm(['/user/logout'], 'post', ['class' => 'navbar-form'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')', //'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link']
                    )
                    . Html::endForm()
                    . '</li>'
                )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
