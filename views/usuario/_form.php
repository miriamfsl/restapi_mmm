<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'finca_id')->textInput() ?>

    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail_corp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail_per')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'rol')->dropDownList([ 'A' => 'A', 'CC' => 'CC', 'CP' => 'CP', 'PP' => 'PP', 'CE' => 'CE', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
