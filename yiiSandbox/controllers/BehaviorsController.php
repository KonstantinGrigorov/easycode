<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl; //класс фильтра контроля доступа
use app\components\MyBehaviors;


class BehaviorsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup'],
                //'denyCallback' => function ($rule, $action) {
                //    throw new \Exception('Нет доступа.');
                //},
                'rules' => [
                    [
                        'allow' => true, //разрешить
                        'controllers' => ['main'], //для контроллера мэйн
                        'actions' => ['reg', 'login', 'activate-account'], //для каких экшенов
                        'verbs' => ['GET', 'POST'], //запросы
                        'roles' => ['?']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['profile'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['logout'],
                        'verbs' => ['POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['index','search', 'send-email', 'reset-password'],
                        //'roles' => ['@'],
                    ],

                    [
                        'allow' => true,
                        'controllers' => ['widget-test'],
                        'actions' => ['index'],
                        /*'ips' => ['127.0.0.1'],
                        'matchCallback' => function ($rule, $action) {
                            return date ('d-m') === '25-07';
                        }*/
                        
                    ],
                ]
            ],
            'removeUnderscore' => [
                'class' => MyBehaviors::className(),
                'controller' => Yii::$app->controller->id,
                'action' => Yii::$app->controller->action->id,
                'removeUnderscore' => Yii::$app->request->get('search')
            ]
        ];
    }
   
}