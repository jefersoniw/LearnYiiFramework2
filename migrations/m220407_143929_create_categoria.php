<?php

use yii\db\Migration;

/**
 * Class m220407_143929_create_categoria
 */
class m220407_143929_create_categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categorias', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'data_cadastro' => $this->dateTime()->notNull()
        ]);

        $this->insert('categorias', [
            'nome' => 'Jeferson Chagas',
            'data_cadastro' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categorias');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220407_143929_create_categoria cannot be reverted.\n";

        return false;
    }
    */
}
