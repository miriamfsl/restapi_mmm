<?php

namespace app\controllers;

use Yii;
use app\models\Caja;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * CajaController implements the CRUD actions for Caja model.
 */
class CajaController extends ApiController
{
    public $modelClass = 'app\models\Caja';
    
}
