<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%description}}`.
 */
class m241004_020906_create_description_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%description}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%description}}');
    }
}
