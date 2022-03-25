<?php

namespace app\controllers;

use yii\base\Controller;

class ExerciciosController extends Controller
{
  public function actionFormulario()
  {

    return $this->render('formulario', []);
  }
}
