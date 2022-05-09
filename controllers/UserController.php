<?php

namespace app\controllers;

use yii\rest\Controller;
use \app\models\Usuario;

class UserController extends ApiController
{
  public $modelClass = 'app\models\Usuarios';

  public $authenable = false;
  public $authexcept = ['authenticate'];

  public function actionAuthenticate()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Si se envían los datos en formato raw dentro de la petición http, se recogen así:
      if (count($_POST) < 1) {
        //Se hace petición por Angular
        //Formato ANGULAR
        $params = json_decode(file_get_contents("php://input"), false);
        @$username = $params->username;
        @$password = $params->password;
      } else {
        // Si se envían los datos de la forma habitual (form-data), se reciben en $_POST:   
        //Formato POSTMAN
        $username = $_POST['username'];
        $password = $_POST['password'];
      }

      if ($u = Usuario::findOne(['usuario' => $username])) {
        if ($u->password == md5($password)) { //o crypt, según esté en la BD

          return ['token' => $u->token, 'id' => $u->id, 'nombre' => $u->nombre, 'rol' => $u->rol];
        }
      }
      return ['error' => 'Usuario o contraseña incorrecto.'];
    }
  }
}
