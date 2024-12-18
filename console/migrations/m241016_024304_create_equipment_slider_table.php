<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%equipment_slider}}`.
 */
class m241016_024304_create_equipment_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%equipment_slider}}', [
            'id' => $this->primaryKey(),
            'href' => $this->string(),
            'title' => $this->string(),
            'image_id' => $this->integer(),
            'link_id' => $this->integer(),
            'equipment_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%equipment_slider}}');
    }
}
