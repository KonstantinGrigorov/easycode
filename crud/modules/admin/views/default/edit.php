<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<p>Править запись</p>

<?php $form = ActiveForm::begin(); ?>


<div class="row">
    <div class="col-md-6">
        <?= $form -> field($one, 'title')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form -> field($one, 'description')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= Html::submitButton('Править', ['class'=>'btn btn-success']) ?>
    </div>

</div>

<?php ActiveForm::end(); ?>