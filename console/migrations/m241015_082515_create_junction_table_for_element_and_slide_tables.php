<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%element_slide}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%element}}`
 * - `{{%slide}}`
 */
class m241015_082515_create_junction_table_for_element_and_slide_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%element_slide}}', [
            'element_id' => $this->integer(),
            'slide_id' => $this->integer(),
            'PRIMARY KEY(element_id, slide_id)',
        ]);

        // creates index for column `element_id`
        $this->createIndex(
            '{{%idx-element_slide-element_id}}',
            '{{%element_slide}}',
            'element_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-element_slide-element_id}}',
            '{{%element_slide}}',
            'element_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `slide_id`
        $this->createIndex(
            '{{%idx-element_slide-slide_id}}',
            '{{%element_slide}}',
            'slide_id'
        );

        // add foreign key for table `{{%slide}}`
        $this->addForeignKey(
            '{{%fk-element_slide-slide_id}}',
            '{{%element_slide}}',
            'slide_id',
            '{{%slide}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-element_slide-element_id}}',
            '{{%element_slide}}'
        );

        // drops index for column `element_id`
        $this->dropIndex(
            '{{%idx-element_slide-element_id}}',
            '{{%element_slide}}'
        );

        // drops foreign key for table `{{%slide}}`
        $this->dropForeignKey(
            '{{%fk-element_slide-slide_id}}',
            '{{%element_slide}}'
        );

        // drops index for column `slide_id`
        $this->dropIndex(
            '{{%idx-element_slide-slide_id}}',
            '{{%element_slide}}'
        );

        $this->dropTable('{{%element_slide}}');
    }
}
