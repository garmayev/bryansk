<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%link}}`.
 */
class m241004_020438_create_link_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%link}}', [
            'id' => $this->primaryKey(),
            'href' => $this->string(),
            'text' => $this->string(),
            'theme' => $this->string(),
            'hover' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%link}}');
    }
}
