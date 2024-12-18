<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event}}`.
 */
class m241112_082955_create_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%event}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image' => $this->string(),
            'text' => $this->text(),
            'start_date' => $this->integer(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%event}}');
    }
}
