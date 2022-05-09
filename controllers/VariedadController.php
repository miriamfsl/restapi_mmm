<?php

namespace app\controllers;

use app\models\Variedad;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * VariedadController implements the CRUD actions for Variedad model.
 */
class VariedadController extends ActiveController
{
    public $modelClass = 'app\models\Variedad';
}
