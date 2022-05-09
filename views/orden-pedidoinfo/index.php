<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use app\models\OrdenPedidoinfo;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orden Pedidoinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-pedidoinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Orden Pedido info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'orden_id',
            'pedidoinfo_id',
            'variedad_id',
            [
                'label' => 'Variedad',
                'attribute' => 'variedad.nombre'
            ],
            'cantidad',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, OrdenPedidoinfo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
