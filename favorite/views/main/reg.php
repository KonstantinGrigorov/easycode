<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\RegForm */
/* @var $form ActiveForm */
?>
<div class="main-reg">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'verifyCode')
                            ->widget(Captcha::className(), [
                            'options'=>["class"=>'input-lg form-control','placeholder'=>$model->getAttributeLabel('verifyCode')],
                            'template' => '<div class="input-group">'
                                        . '<div class="input-group-addon">{image}</div>'
                                        . '<div >{input}</div></div>',
                            ]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    
    <?php
    if($model->scenario === 'emailActivation'):
    ?>
    <i>*На указанный почтовый адрес будет отправлено письмо для активации аккаунта.</i>
    <?php
    endif;
    ?>

</div><!-- main-reg -->
