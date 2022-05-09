<?php

namespace app\controllers;

use app\models\Usuario;
use yii\filters\VerbFilter;
//use app\models\UsuarioSearch;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends ApiController
{
    public $modelClass = 'app\models\Usuario';

}
