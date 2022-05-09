<?php

use app\models\Caja;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cajas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Caja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Orden',
                'attribute' => 'orden.nombre',
            ],
            [
                'label' => 'Sector',
                'attribute' => 'sector.nombre',
            ],
            [
                'label' => 'Tipo',
                'attribute' => 'tipocaja.nombre',
            ],
            [
                'label' => 'Etiqueta',
                'attribute' => 'etiqueta.nombre',
            ],
            'estado',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Caja $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
