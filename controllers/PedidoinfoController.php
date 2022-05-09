<?php

namespace app\controllers;

use app\models\Pedidoinfo;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * PedidoinfoController implements the CRUD actions for Pedidoinfo model.
 */
class PedidoinfoController extends ActiveController
{
    public $modelClass = 'app\models\Pedidoinfo';

    
}
