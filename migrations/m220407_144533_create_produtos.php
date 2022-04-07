<?php

use yii\db\Migration;

/**
 * Class m220407_144533_create_produtos
 */
class m220407_144533_create_produtos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('produtos', [
            'id' => $this->primaryKey(),
            'categoria_id' => $this->integer()->notNull(),
            'data_cadastro' => $this->dateTime()->notNull(),
            'nome' => $this->string(60)->notNull(),
            'descricao' => $this->text(),
            'valor' => $this->decimal(10, 2)->notNull(),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1)
        ]);

        $this->addForeignKey('fk_categoria_id', 'produtos', 'categoria_id', 'categorias', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_categoria_id', 'produtos');
        $this->dropTable('produtos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220407_144533_create_produtos cannot be reverted.\n";

        return false;
    }
    */
}
