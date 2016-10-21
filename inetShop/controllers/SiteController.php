<?php


class SiteController 
{
    
    public function actionIndex()
    {
                // Подключаем вид
        require('/views/site/index.php');
        return true;
    }
   
    
}
