<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%option}}`.
 */
class m241016_034704_create_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%option}}', [
            'id' => $this->primaryKey(),
            'heading' => $this->string(),
            'text' => $this->text(),
            'element_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%option}}');
    }
}
