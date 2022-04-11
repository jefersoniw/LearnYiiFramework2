<?php

namespace app\controllers;

use app\models\Cliente;
use Yii;
use yii\web\Controller;

class ClienteController extends Controller
{
  public function actionIndex()
  {
    $clientes = [
      ['nome' => 'jeferson chagas silva'],
      ['nome' => 'jessica silva de azevedo'],
      ['nome' => 'aislan azevedo'],
    ];

    /*foreach ($clientes as $c) {
      $cliente = new Cliente();
      $cliente->nome = $c['nome'];
      $cliente->save();
    }*/

    //inserindo com insertbatch
    Yii::$app->db->createCommand()->batchInsert(Cliente::tableName(), ['nome'], $clientes)->execute();

    echo 'ok';
  }
}
