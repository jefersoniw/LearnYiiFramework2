<?php

use yii\db\Migration;

/**
 * Class m220410_235242_create_clientes
 */
class m220410_235242_create_clientes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clientes}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clientes}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220410_235242_create_clientes cannot be reverted.\n";

        return false;
    }
    */
}
