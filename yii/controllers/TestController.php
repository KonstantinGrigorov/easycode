<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\TestOne;

/**
 * PostController implements the CRUD actions for Post model.
 */
class TestController extends Controller
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

   public function actionTest1() {
       $model = new TestOne($_REQUEST, $_GET, $_POST);
       return $this->render('test1', ['model' => $model]);
   }
}
