<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Caja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orden_id')->textInput() ?>

    <?= $form->field($model, 'sector_id')->textInput() ?>

    <?= $form->field($model, 'tipocaja_id')->textInput() ?>

    <?= $form->field($model, 'etiqueta_id')->textInput() ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'P' => 'P', 'R' => 'R', 'A' => 'A', 'L' => 'L', 'E' => 'E', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
