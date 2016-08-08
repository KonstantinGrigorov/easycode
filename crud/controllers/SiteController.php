<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MyList;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    
    public function actionIndex()
    {
        return $this->render('index');
    }

    
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionHello()
    {
        $var = 'My page';
    $array = MyList::getAll();   
    return $this->render('hello', ['varInView'=>$var, 'arrayInView'=>$array]);
       
    }
    
    public function actionView($id)
    {
        $one = MyList::getOne($id);
        return $this->render('view',['one'=>$one]);
    }
}
