<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<p>Создать запись</p>

<?php $form = ActiveForm::begin(); ?>


<div class="row">
    <div class="col-md-6">
        <?= $form -> field($model, 'title')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form -> field($model, 'description')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= Html::submitButton('Создать', ['class'=>'btn btn-success']) ?>
    </div>

</div>

<?php ActiveForm::end(); ?>