<?php

namespace app\controllers;

use app\models\Sector;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * SectorController implements the CRUD actions for Sector model.
 */
class SectorController extends ActiveController
{
    public $modelClass = 'app\models\Sector';
}
