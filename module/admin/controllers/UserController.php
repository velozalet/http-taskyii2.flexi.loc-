<?php

namespace app\module\admin\controllers;

use Yii;
use app\module\admin\models\User;
use app\module\admin\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new UserSearch();
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
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {

        if(Yii::$app->user->isGuest || Yii::$app->user->identity->role == 0): //if user is guest or not Admin - redirect to Home page
            return $this->goHome();
        else:
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        endif;
    }


    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
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
     * Updates an existing User model.
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
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
