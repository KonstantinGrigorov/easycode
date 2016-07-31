<?php

namespace app\controllers;

class WidgetTestController extends BehaviorsController
{
    public function actionIndex()
    {
        /*$search_some = 'примеры';
        return $this->redirect(
        	[
        		'main/search',
        		'search'=>$search_some
        	]
        	);*/
		return $this->render('index');

	}
}
