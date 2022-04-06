<?php

namespace app\classes\components;

use yii\i18n\Formatter;

class MyFormat extends Formatter
{
  public function asCep($string)
  {
    return substr($string, 0, 5) . '-' . substr($string, 5);
  }

  public function asCpf($string)
  {
    return substr($string, 0, 3) . '.' . substr($string, 3, 3) . '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
  }
}
