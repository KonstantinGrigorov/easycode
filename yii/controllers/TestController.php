<?php

namespace app\controllers;

use app\models\Power;
use app\models\Rectangle;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\TestOne;
use app\models\Color;

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

    public function actionPower() {
        $model = new Power();
        return $this->render('power', ['model' => $model]);
    }

    public function actionFour() {
        $color = new Color(50, 10, 100);
        $rectangle = new Rectangle($color, 400, 400);
        return $this->render(
            'four',
            [
                'rectangle' => $rectangle
            ]
        );
    }
}
