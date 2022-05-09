<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Pedidoinfo;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Información del pedido';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidoinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear información de pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'pedido_id',
            'variedad_id',
            [
                'label' => 'Variedad',
                'attribute' => 'variedad.nombre'
            ],
            'cantidad',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Pedidoinfo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
