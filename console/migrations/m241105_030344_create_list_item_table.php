<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%description_list_item}}`.
 */
class m241105_030344_create_list_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%list_item}}', [
            'id' => $this->primaryKey(),
            'number' => $this->integer(),
            'text' => $this->text(),
            'parent_id' => $this->integer(),
            'type' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%list_item}}');
    }
}
