<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%description_list}}`.
 */
class m241105_030306_create_description_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%description_list}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'head_text' => $this->string(),
            'bottom_list' => $this->text(),
            'element_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%description_list}}');
    }
}
