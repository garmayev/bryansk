<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%section}}`.
 */
class m241004_014529_create_section_table extends Migration
{
    private $tableName = 'section';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%$this->tableName}}", [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent_id' => $this->integer()->null(),
            'image' => $this->string()->null(),
            'sort' => $this->integer(),
            'code' => $this->string(),
        ]);

        $this->createIndex(
            "idx-$this->tableName-parent_id",
            "{{%$this->tableName}}",
            'parent_id'
        );

        $this->addForeignKey(
            "fk-$this->tableName-parent_id",
            "{{%$this->tableName}}",
            "parent_id",
            "{{%$this->tableName}}",
            "id",
            "CASCADE",
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey("fk-$this->tableName-parent_id", "{{%$this->tableName}}");
        $this->dropIndex("idx-$this->tableName-parent_id", "{{%$this->tableName}}");
        $this->dropTable('{{%section}}');
    }
}
