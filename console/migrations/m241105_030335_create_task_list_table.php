<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_list}}`.
 */
class m241105_030335_create_task_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_list}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'picture_id' => $this->integer(),
            'element_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task_list}}');
    }
}
