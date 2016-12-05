<?php


namespace app\controllers;
use yii\web\Controller;
/**
 * Description of AppController
 *
 * @author Admin
 */
class AppController extends Controller{
    //put your code here
    
    public function actionIndex() {
        return 'Hello world';
    }
    
    public function actionSlider() {
        return $this->render('slider');
    }
    
    public function actionPortfolio() {
        return $this->render('portfolio');
    }
    
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
}
