<?php

namespace app\controllers;
use app\models\Post;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        /*$searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
        $model = Post::find()->all();
        return $this->render('index', ['model'=>$model]);
    }
    
}