<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedido Devueltos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-devuelto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pedido Devuelto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pedido_id',
            'orden_id',
            'cliente_id',
            'fecha_peticion',
            //'fecha_devuelto',
            //'descrip',
            //'img:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PedidoDevuelto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
