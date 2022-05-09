<?php

namespace app\controllers;

use app\models\Cliente;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * ClienteController implements the CRUD actions for Cliente model.
 */
class ClienteController extends ActiveController
{
    public $modelClass = 'app\models\Cliente';
}
