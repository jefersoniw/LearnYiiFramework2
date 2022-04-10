<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class FormatterController extends Controller
{
  public function actionIndex()
  {
    $appLang = Yii::$app->language;

    /** @var MyFormat $formatter */
    $formatter = Yii::$app->formatter;

    echo "<h2>{ $appLang }</h2>";

    echo "
    <p>Percentuais: {$formatter->asPercent(0.2454545454, 2)}</p>
    <p>Booleans: {$formatter->asBoolean(true)}</p>
    <p>Email: {$formatter->asEmail('jeferson@email.com')}</p>
    <p>NText: {$formatter->asNtext("Jeferson\nChagas")}</p>
    <p>Datas padrão: {$formatter->asDate("2022-04-06")}</p>
    <p>Datas Short: {$formatter->asDate("2022-04-06", "short")}</p>
    <p>Datas medium: {$formatter->asDate("2022-04-06", "medium")}</p>
    <p>Datas long: {$formatter->asDate("2022-04-06", "long")}</p>
    <p>Datas full: {$formatter->asDate("2022-04-06", "full")}</p>
    <p>Datas formato brasileiro: {$formatter->asDate("2022-04-06", "dd/MM/YYYY")}</p>
    <p>Datas php: {$formatter->asDate("2022-04-06", "php:d/m/Y")}</p>
    <p>Datas padrão alterada no webconfig: {$formatter->asDate("2022-04-06")}</p>

    <p>Moedas: {$formatter->asCurrency(12345.67, "R$")}</p>
    <p>Size: {$formatter->asShortSize("5222900", "2")}</p>
    <p>CPF: {$formatter->asCpf('33233233654')}</p>
    <p>CPF: {$formatter->asCep('41341720')}</p>
    ";
  }
}
