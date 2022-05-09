<?php

namespace app\controllers;

use app\models\Finca;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * FincaController implements the CRUD actions for Finca model.
 */
class FincaController extends ActiveController
{
    public $modelClass = 'app\models\Finca';

}
