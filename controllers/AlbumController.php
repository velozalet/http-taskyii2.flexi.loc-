<?php
namespace app\controllers;

use app\models\Album;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class AlbumController extends Controller
{
    public function actionIndex() {
        $album_model = new Album();

        //show all images from table `album` DB
        $all_images = ( $all_images = $album_model->getAllImages() ) ? $all_images : null;  //var_dump($all_images);die;

        if(Yii::$app->user->isGuest): //if user is guest - redirect to Home page
            return $this->goHome();
        else:
            return $this->render('index', [ 'login_model'=>$album_model,
                    'all_images'=>$all_images,
                ]
            );  //return $this->render('index'); - testing
        endif;
    }

} //__/class AlbumController
