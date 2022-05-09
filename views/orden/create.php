<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = 'Crear Órden';
$this->params['breadcrumbs'][] = ['label' => 'Órdenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
