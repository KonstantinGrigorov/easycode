<?php

namespace app\models;

use yii\base\Model;
use Yii;



class LoginForm extends Model {

    public $username;
    public $password;
    public $email;
    public $rememberMe = true;
    public $status;

    private $_user = false;
    
    public $verifyCode;

    public function rules() {
        return[
                [['username','password'],'required', 'on' => 'default'],
                [['email', 'password'], 'required', 'on' => 'loginWithEmail'],
                ['email', 'email'],
                ['rememberMe', 'boolean'],
                ['password', 'validatePassword'],
            ['verifyCode', 'captcha'],
            ['verifyCode', 'required']
        ];
        
        
    }

    public function validatePassword($attribute)
    {
        if(!$this->hasErrors()): //если нет других ошибок валидации
            $user = $this->getUser();
            if(!$user || !$user -> validatePassword($this->password)):
                $field = ($this->scenario === 'loginWithEmail') ? 'email' : 'username';
                $this->addError($attribute, 'Неправильное '.$field.'имя пользователя или пароль');
            endif;
        endif;
    }


    public function getUser()
    {
        if ($this->_user === false):
            if($this->scenario === 'loginWithEmail'):
                $this->_user = User::findByEmail($this->email);
            else:            
            
            $this->_user = User::findByUsername($this->username);
        endif;
    endif;
        return $this->_user;
    }


    public function attributeLabels() {
        return[
            'username' => 'Ник',
            'email' => 'Ваш почтовый адрес',
            'password' => 'Пароль',
            'rememberMe' => 'Запомнить меня',
            'verifyCode'=>"Введите код с картинки"
                
        ];
        
    }

    public function login() {
        
        if($this->validate()): //если валидация на стороне сервeра прошла успешно
            $this->status = ($user=$this->getUser()) ? $user->status:User::STATUS_NOT_ACTIVE;
                if ($this->status === User::STATUS_ACTIVE):
                    return Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);
                else:
                    return false;
                endif;
        else:
            return false;
        endif;
    }


}