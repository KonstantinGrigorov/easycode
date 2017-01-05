<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.08.2015
 * Time: 15:21
 */
namespace app\models;
use Yii;
use yii\base\Model;
class SendEmailForm extends Model
{
    public $email;
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'], //может быть только имейл-адресом
            ['email', 'exist',
                'targetClass' => User::className(),
                'filter' => [
                    'status' => User::STATUS_ACTIVE
                ],
                'message' => 'Данный адрес почты не зарегистрирован.'
            ],
        ];
    }
    public function attributeLabels()
    {
        return [
            'email' => 'Адрес почты'
        ];
    }
    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne(
            [
                'status' => User::STATUS_ACTIVE,
                'email' => $this->email
            ]
        );
        if($user): //если пользователь найден
            $user->generateSecretKey();
            if($user->save()):
                return Yii::$app->mailer->compose('resetPassword', ['user' => $user])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name.' (отправлено роботом)'])
                    ->setTo($this->email) //кому отправить (указаная в форме почта)
                    ->setSubject('Сброс пароля для '.Yii::$app->name)//тема письма
                    ->send();
            endif;
        endif;
        return false;
    }
}