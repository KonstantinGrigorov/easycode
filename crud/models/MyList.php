<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class MyList extends \yii\db\ActiveRecord
{
     public function rules(){
        return [
            [['title', 'description'],'required'],
        ];
    }
    
    public static function tableName(){
        return 'list';
    }
    
    public static function getAll(){
        /*$array = [
            1=>'first',
            2=>'second',
            3=>'third'
        ];
        return $array;*/
        $data = self::find()->all();
        return $data;
    }
    
    public static function getOne($id){
        $data = self::find()->where(['id'=>$id])->one();
        return $data;
    }
    
    
}
