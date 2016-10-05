<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!-- MODAL WINDOW BLOCK for "Album" -->
<div class="modal fade" id="myModalGall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!--modal-sm / modal-lg-->
        <!--Content of modal window-->
        <div class="modal-content">

            <!--Header of modal window-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><em class='glyphicon glyphicon-pencil'>.......</em> <span class="descript">Description..</span></h4>
            </div>
            <!--/Header of modal window-->

            <!--Body of modal window-->
            <div class="modal-body">
                <!-- <?//=Html::img('@web'.$all_images[1]['src'].'', ['class'=>'img-gallery-2', 'alt'=>''.$all_images[1]['src'].'']) ?>-->
                <?=Html::img('', ['class'=>'popup_img', 'alt'=>'']) ?>
            </div>
            <!--/Body of modal window-->

            <!--Footer of modal window-->
            <div class="modal-footer">
                <span class="data_create_img pull-left"></span>
                <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
            </div>
            <!--/Footer of modal window-->

        </div>
        <!--Content of modal window-->
    </div>
</div>
<!--/MODAL WINDOW BLOCK for "Album" -->