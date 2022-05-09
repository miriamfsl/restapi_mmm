<?php

namespace app\controllers;

use app\models\Tipocaja;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * TipocajaController implements the CRUD actions for Tipocaja model.
 */
class TipocajaController extends ActiveController
{
    public $modelClass = 'app\models\Tipocaja';
}
