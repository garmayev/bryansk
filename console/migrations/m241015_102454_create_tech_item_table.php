<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tech_item}}`.
 */
class m241015_102454_create_tech_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tech_item}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'tech_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tech_item}}');
    }
}
