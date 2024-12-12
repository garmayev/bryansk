<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feature_content}}`.
 */
class m241016_045303_create_feature_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feature_content}}', [
            'id' => $this->primaryKey(),
            'toggle' => $this->string(),
            'content' => $this->text(),
            'image_id' => $this->integer(),
            'feature_item_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feature_content}}');
    }
}
