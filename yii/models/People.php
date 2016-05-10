<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property string $id
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $gender
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['id', 'name', 'lastname'], 'required'],
            [['id'], 'integer'],
            [['gender'], 'string'],
            [['lastname'], 'required'],
            [['gender'], 'string'],
            ['name', 'required', 'message' => 'Нельзя!'],
            [['name'], 'string', 'max' => 30],
            [['lastname'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'gender' => 'Gender',
        ];
    }
}
