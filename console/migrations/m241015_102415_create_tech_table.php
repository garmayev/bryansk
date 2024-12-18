<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tech}}`.
 */
class m241015_102415_create_tech_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tech}}', [
            'id' => $this->primaryKey(),
            'heading' => $this->string(),
            'element_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tech}}');
    }
}
