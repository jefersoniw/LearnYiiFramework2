<?php

namespace app\controllers;

use app\models\Cliente;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller
{
  public function actionIndex()
  {
    $post = Yii::$app->getRequest()->post();
    $model = new Cliente();

    if ($model->load($post) && $model->validate()) {

      $model->fotoDoCliente = UploadedFile::getInstance($model, 'fotoDoCliente');
      $model->foto = $model->fotoDoCliente->name;
      $model->save();

      $uploadPath = Yii::getAlias('@webroot/files');
      $model->fotoDoCliente->saveAs($uploadPath . '/' . $model->fotoDoCliente->name);
    }

    return $this->render('index', [
      'model' => $model
    ]);
  }
}
