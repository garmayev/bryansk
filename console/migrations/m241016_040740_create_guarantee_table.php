<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guarantee}}`.
 */
class m241016_040740_create_guarantee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guarantee}}', [
            'id' => $this->primaryKey(),
            'heading' => $this->string(),
            'lead' => $this->string(),
            'content' => $this->text(),
            'element_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%guarantee}}');
    }
}
