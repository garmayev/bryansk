<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%material}}`.
 */
class m241004_021023_create_material_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%material}}', [
            'id' => $this->primaryKey(),
            'href' => $this->string(),
            'name' => $this->string(),
            'size' => $this->string(),
            'format' => $this->string(),
            'element_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%material}}');
    }
}
