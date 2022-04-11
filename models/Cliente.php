<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Clientes}}".
 *
 * @property int $id
 * @property string $nome
 */
class Cliente extends \yii\db\ActiveRecord
{
    public $fotoDoCliente;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Clientes}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome', 'foto'], 'string', 'max' => 60],
            [['fotoDoCliente'], 'file', 'extensions' => 'jpg, png, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'foto' => 'Foto do Cliente',
            'fotoDoCliente' => 'Foto do Cliente'
        ];
    }
}
