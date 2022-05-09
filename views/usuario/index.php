<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Usuario;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Finca',
                'attribute' => 'finca.nombre',
                //'filter'=>Finca::lookup(),
            ],
            'usuario',
            'nombre',
            'mail_corp',
            'mail_per',
            'telefono',
            [ 'attribute'=>'rol',
              'label'=>'Rol',
              'filter'=>Usuario::$roles,
              'value'=>function($data){
                return $data->rolText;
              }
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Usuario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
