<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slide_link}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%slide}}`
 * - `{{%link}}`
 */
class m241004_020756_create_junction_table_for_slide_and_link_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slide_link}}', [
            'slide_id' => $this->integer(),
            'link_id' => $this->integer(),
            'PRIMARY KEY(slide_id, link_id)',
        ]);

        // creates index for column `slide_id`
        $this->createIndex(
            '{{%idx-slide_link-slide_id}}',
            '{{%slide_link}}',
            'slide_id'
        );

        // add foreign key for table `{{%slide}}`
        $this->addForeignKey(
            '{{%fk-slide_link-slide_id}}',
            '{{%slide_link}}',
            'slide_id',
            '{{%slide}}',
            'id',
            'CASCADE'
        );

        // creates index for column `link_id`
        $this->createIndex(
            '{{%idx-slide_link-link_id}}',
            '{{%slide_link}}',
            'link_id'
        );

        // add foreign key for table `{{%link}}`
        $this->addForeignKey(
            '{{%fk-slide_link-link_id}}',
            '{{%slide_link}}',
            'link_id',
            '{{%link}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%slide}}`
        $this->dropForeignKey(
            '{{%fk-slide_link-slide_id}}',
            '{{%slide_link}}'
        );

        // drops index for column `slide_id`
        $this->dropIndex(
            '{{%idx-slide_link-slide_id}}',
            '{{%slide_link}}'
        );

        // drops foreign key for table `{{%link}}`
        $this->dropForeignKey(
            '{{%fk-slide_link-link_id}}',
            '{{%slide_link}}'
        );

        // drops index for column `link_id`
        $this->dropIndex(
            '{{%idx-slide_link-link_id}}',
            '{{%slide_link}}'
        );

        $this->dropTable('{{%slide_link}}');
    }
}
