<?php

namespace app\controllers;

use Yii;
use app\models\Orden;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\HttpBearerAuth;

/**
 * OrdenController implements the CRUD actions for Orden model.
 */
class OrdenController extends ApiController
{
    public $modelClass = 'app\models\Orden';
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
        $finca_id = Yii::$app->user->identity->finca_id;
        $finca = '';
        if ($finca_id != null) {
            //se filtrará para que salgan las órdenes de su finca
            $finca =  "AND finca_id = " . $finca_id;
        }
        $rol = Yii::$app->user->identity->rol;
        $estado = '';
        switch ($rol) {
            case 'CC': //Control de campo
                //Puede ver las órdenes pendientes
                $estado = 'P';
                break;
            case 'CP': //Control de planta
                //Puede ver las órdenes terminadas
                $estado = 'T';
                break;
            case 'PP': //Producción
                //Puede ver las órdenes en almacén
                $estado = 'A';
                break;
            case 'CE': //Control de expedición
                //Puede ver las órdenes de línea de producción
                $estado = 'L';
                break;
        }
        return new ActiveDataProvider([
            'query' => Orden::find()->where(
                "estado = '" . $estado . "' " . $finca
            )
        ]);
    }
}
