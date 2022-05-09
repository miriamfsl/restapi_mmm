<?php

namespace app\controllers;

use app\models\PedidoDevuelto;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PedidoDevueltoController implements the CRUD actions for PedidoDevuelto model.
 */
class PedidoDevueltoController extends ApiController
{
    public $modelClass = 'app\models\PedidoDevuelto';

    //public $authenable = false;
    public function actions()
    {
        $actions = parent::actions();
        //Eliminamos acciones de crear y eliminar ordenes. Eliminamos update para personalizarla
        //unset($actions['delete'], $actions['create'], $actions['update']);
        // Redefinimos el método que prepara los datos en el index
        $actions['index']['prepareDataProvider'] = [$this, 'indexProvider'];
        return $actions;
    }

    public function indexProvider()
    {
        $pedidoid = Yii::$app->request->get('id');
        $filtro = "pedido_id=".$pedidoid;
        return new ActiveDataProvider([
            'query' => PedidoDevuelto::find()->where(
                $filtro
            )
        ]);
    }
    
}
