<?php

namespace app\models;

use yii\db\ActiveRecord;

class Pessoas extends ActiveRecord
{
  public static function tableName()
  {
    return 'pessoas';
  }
}
