<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parcela */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parcela-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'variedad_id')->textInput() ?>

    <?= $form->field($model, 'finca_id')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cant_total')->textInput() ?>

    <?= $form->field($model, 'cant_disp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
