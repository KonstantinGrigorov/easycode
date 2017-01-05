<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */
?>
<div class="main-login">

    <?php $form = ActiveForm::begin(); ?>

        <?php if($model->scenario === 'loginWithEmail'): ?>
        <?= $form->field($model, 'email') ?>
    <?php else: ?>
        <?= $form->field($model, 'username') ?>
    <?php endif; ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'rememberMe')->checkbox() ?>
    <?= $form->field($model, 'verifyCode')
                        ->widget(Captcha::className(), [
                        'options'=>["class"=>'input-lg form-control','placeholder'=>$model->getAttributeLabel('verifyCode')],
                        'template' => '<div class="input-group">'
                                    . '<div class="input-group-addon">{image}</div>'
                                    . '<div>{input}</div></div>',
                        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

    <?= Html::a('Забыли пароль?', ['/main/send-email']) ?>

</div><!-- main-login -->
