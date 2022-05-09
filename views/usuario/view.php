<?php

use yii\helpers\Html;
use app\models\Usuario;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está segur@ de que desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Finca',
                'attribute' => 'finca.nombre',
            ],
            'usuario',
            'password',
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
        ],
    ]) ?>

</div>
