<?php

use app\models\Finca;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Parcela;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parcelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parcela-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Parcela', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Variedad',
                'attribute' => 'variedad.nombre',
                'value' => function ($data) {
                    return $data->variedad->nombre;
                }
            ],
            [
                'label' => 'Finca',
                'attribute' => 'finca.nombre',
                //'filter'=>Finca::lookup(),
                'value' => function ($data) {
                    return $data->finca->nombre;
                }
            ],
            'nombre',
            'cant_total',
            //'cant_disp',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Parcela $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>