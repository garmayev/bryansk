<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%review}}`.
 */
class m241015_103530_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%review}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'image' => $this->string(),
            'content' => $this->text(),
            'element_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%review}}');
    }
}
