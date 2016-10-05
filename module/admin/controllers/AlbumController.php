<?php

namespace app\module\admin\controllers;

use Yii;
use app\module\admin\models\Album;
use app\module\admin\models\AlbumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile; //for upload files

/**
 * AlbumController implements the CRUD actions for Album model.
 */
class AlbumController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Album models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlbumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if(Yii::$app->user->isGuest || Yii::$app->user->identity->role == 0): //if user is guest or not Admin - redirect to Home page
            return $this->goHome();
        else:
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        endif;
    }

    /**
     * Displays a single Album model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(Yii::$app->user->isGuest || Yii::$app->user->identity->role == 0): //if user is guest or not Admin - redirect to Home page
            return $this->goHome();
        else:
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        endif;
    }

    /**
     * Creates a new Album model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Album();

        if ( $model->load(Yii::$app->request->post()) ) {  //($model->load(Yii::$app->request->post()) && $model->save())


            if( $model->validate() ) {
                $model->file=UploadedFile::getInstance($model,'file');
                $model->file->saveAs('uploads/'. $model->file->baseName .'.'.$model->file->extension);
                $model->src = '/uploads/'.$model->file->baseName .'.'.$model->file->extension; //save name img($model->file->baseName .'.'.$model->file->extension) in DB to path /uploads/..
                //var_dump($model->file->baseName .'.'.$model->file->extension);die;  //'original.jpg'

                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
            else {
                return $this->render('create', ['model' => $model,]);
            }

        } else {
            if(Yii::$app->user->isGuest || Yii::$app->user->identity->role == 0): //if user is guest or not Admin - redirect to Home page
                return $this->goHome();
            else:
                return $this->render('create', [
                    'model' => $model,
                ]);
            endif;
        }
    }

    /**
     * Updates an existing Album model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            if(Yii::$app->user->isGuest || Yii::$app->user->identity->role == 0): //if user is guest or not Admin - redirect to Home page
                return $this->goHome();
            else:
                return $this->render('update', [
                    'model' => $model,
                ]);
            endif;
        }
    }

    /**
     * Deletes an existing Album model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        if(Yii::$app->user->isGuest || Yii::$app->user->identity->role == 0): //if user is guest or not Admin - redirect to Home page
            return $this->goHome();
        else:
            return $this->redirect(['index']);
        endif;
    }

    /**
     * Finds the Album model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Album the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Album::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
