<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\MyList;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function actionIndex()
    {
       $array = MyList::getAll(); 
       return $this->render('index', ['model' =>$array]);
   

    }
   
    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MyList();

        if (isset($_POST['MyList'])? $_POST['MyList'] : null) {
            $model->title=$_POST['MyList']['title'];
            $model->description=$_POST['MyList']['description'];
            //$one->attributes = $_POST['MyList];
                if ($model->validate()&& $model->save()){
                    return $this->redirect(['index']);
                }
        }
        return $this->render('create', ['model'=>$model]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionEdit($id)
    {
        $one = MyList::getOne($id);

        if (isset($_POST['MyList'])? $_POST['MyList'] : null) {
            $one->title=$_POST['MyList']['title'];
            $one->description=$_POST['MyList']['description'];
            //$one->attributes = $_POST['MyList]; вывод ВСЕХ атрибутов
                if ($one->validate()&& $one->save()){
                    return $this->redirect(['index']);
                }
        }
        return $this->render('edit', ['one'=>$one]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model=MyList::getOne($id);
        if ($model!= NULL){
            $model->delete();
        return $this->redirect(['index']);
        }
        return $this->redirect(['error']);
    }

}
