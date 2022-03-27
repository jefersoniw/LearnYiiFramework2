<?php

namespace app\controllers;

use app\models\CadastroModel;
use app\models\Pessoas;
use Yii;
use yii\base\Controller;
use yii\data\Pagination;

class ExerciciosController extends Controller
{
  public function actionFormulario()
  {
    $cadastroModel = new CadastroModel();

    $post = Yii::$app->request->post();

    if ($cadastroModel->load($post) && $cadastroModel->validate()) {
      return $this->render('formulario-confirmacao', [
        'model' => $cadastroModel
      ]);
    } else {
      return $this->render('formulario', [
        'model' => $cadastroModel
      ]);
    }
  }

  public function actionPessoas()
  {

    /*$pessoas = Pessoas::find()->orderBy('nome')->all();
    echo '<pre>';
    print_r($pessoas);*/

    /*$pessoa = Pessoas::findOne(7);
    echo $pessoa->nome . ' - ' . $pessoa->email;*/

    /*$pessoa = new Pessoas();
    $pessoa->nome = 'Jeferson Wiggers';
    $pessoa->email = 'jeferson@email.com';
    $pessoa->cidade = 'Salvador';
    $pessoa->estado = 'BA';
    $pessoa->save();
    echo $pessoa->nome . ' - ' . $pessoa->email;*/

    $query = Pessoas::find();

    $pagination = new Pagination([
      'defaultPageSize' => 3,
      'totalCount' => $query->count()
    ]);

    $pessoas = $query->orderBy('nome')
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

    return $this->render('pessoas', ['pessoas' => $pessoas, 'pagination' => $pagination]);
  }
}
