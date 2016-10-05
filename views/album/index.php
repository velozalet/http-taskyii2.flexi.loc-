<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
?>

<?php
$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;

$cnt_all_posts; //all data of images from DB for this "Gallery"
?>

    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>

        <div class="row">
            <!--<p> <img src="--><?//=$all_images[0]['src'] ?><!--" alt="--><?//=$all_images[0]['alt'] ?><!--"> </p>-->
            <?php for($i=0, $cnt_all_images=count($all_images); $i < $cnt_all_images; ++$i){  ?>
                <div class="col-sm-4 image-item-<?=$all_images[$i]['id']; ?>" data-create="<?= date("d M Y",$all_images[$i]['create']); ?>">
                    <?=Html::img('@web'.$all_images[$i]['src'].'', ['class'=>'img-gallery-'.$all_images[$i]['id'].'', 'alt'=>''.$all_images[$i]['alt'].'', 'data-toggle'=>'modal', 'data-target'=>'#myModalGall']) ?>
                </div>
            <?php } ?>

        </div>

    </div>

    <!--rendering view modal_window_for_album.php with Modal window for album(gallery) for single image -->
    <?php echo \Yii::$app->view->renderFile('@app/views/album/modal_window_for_album.php'); ?>








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