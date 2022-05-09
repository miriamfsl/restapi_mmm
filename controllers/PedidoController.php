<?php

namespace app\controllers;

use Yii;
use app\models\Pedido;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\HttpBearerAuth;

/**
 * PedidoController implements the CRUD actions for Pedido model.
 */
class PedidoController extends ApiController
{
    public $modelClass = 'app\models\Pedido';

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
        //Si el usuario tiene finca -> (rol campo)
        //se añade comprobación a la query
        $cliente_id = Yii::$app->user->identity->cliente_id;
        $rol = Yii::$app->user->identity->rol;
        $estado = '';
        switch ($rol) {
            case 'C': //Control de campo
                //Puede ver los pedidos pendientes
                $filtro = "cliente_id=".$cliente_id;
                break;
        }
        return new ActiveDataProvider([
            'query' => Pedido::find()->where(
                $filtro
            )
        ]);
    }
}
