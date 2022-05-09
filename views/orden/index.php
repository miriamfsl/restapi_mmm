<?php

use yii\helpers\Url;
use app\models\Orden;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Órdenes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Órden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'lote',
            [
                'label' => 'Variedad',
                'attribute' => 'variedad.nombre',
            ],
            [
                'label' => 'Finca',
                'attribute' => 'finca.nombre',
            ],
            'fecha',
            //'cantidad',
            //'estado',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Orden $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
