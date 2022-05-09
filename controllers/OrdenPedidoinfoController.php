<?php

namespace app\controllers;

use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use app\models\OrdenPedidoinfo;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * OrdenPedidoinfoController implements the CRUD actions for OrdenPedidoinfo model.
 */
class OrdenPedidoinfoController extends ActiveController
{
    public $modelClass = 'app\models\OrdenPedidoinfo';
}
