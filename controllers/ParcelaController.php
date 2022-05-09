<?php

namespace app\controllers;

use app\models\Parcela;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * ParcelaController implements the CRUD actions for Parcela model.
 */
class ParcelaController extends ActiveController
{
    public $modelClass = 'app\models\Parcela';
}
