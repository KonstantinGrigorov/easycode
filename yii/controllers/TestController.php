<?php

namespace app\controllers;

use app\models\People;
use app\models\Power;
use app\models\Rectangle;
use app\models\Test;
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

    public function actionTest() {
        $people = new People();
        $attrs = [
            'lastname' => 'name',
            'name' => 'name'
        ];
        $people->attributes = $_POST;
        $people->save();
        if ($people->save()) {
            //
        } else {
            echo '<pre>';
            print_r($people->getErrors());
            echo '</pre>';
        }
    }
}
