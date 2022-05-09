<?php

namespace app\controllers;

use app\models\Etiqueta;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * EtiquetaController implements the CRUD actions for Etiqueta model.
 */
class EtiquetaController extends ActiveController
{
    public $modelClass = 'app\models\Etiqueta';
}
