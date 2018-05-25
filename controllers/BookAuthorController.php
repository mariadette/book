<?php

namespace app\controllers;
use yii;
use app\models\BookAuthor;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class BookAuthorController extends \yii\web\Controller
{
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

    public function actionCreate()
    {
        $model = new BookAuthor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        BookAuthor::findOne($id)->delete();
        return $this->redirect(['/bookauthor/index']);
    }

    public function actionIndex()
    {
        $model = BookAuthor::find()->orderBy('id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = BookAuthor::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = BookAuthor::findOne($id);
        return $this->render('view', compact('model'));
    }

}
