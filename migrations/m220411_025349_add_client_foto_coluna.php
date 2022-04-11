<?php

use app\models\Cliente;
use yii\db\Migration;

/**
 * Class m220411_025349_add_client_foto_coluna
 */
class m220411_025349_add_client_foto_coluna extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Cliente::tableName(), 'foto', $this->string(60));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(Cliente::tableName(), 'foto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220411_025349_add_client_foto_coluna cannot be reverted.\n";

        return false;
    }
    */
}
