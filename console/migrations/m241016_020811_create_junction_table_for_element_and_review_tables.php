<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%element_review}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%element}}`
 * - `{{%review}}`
 */
class m241016_020811_create_junction_table_for_element_and_review_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%element_review}}', [
            'element_id' => $this->integer(),
            'review_id' => $this->integer(),
            'PRIMARY KEY(element_id, review_id)',
        ]);

        // creates index for column `element_id`
        $this->createIndex(
            '{{%idx-element_review-element_id}}',
            '{{%element_review}}',
            'element_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-element_review-element_id}}',
            '{{%element_review}}',
            'element_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `review_id`
        $this->createIndex(
            '{{%idx-element_review-review_id}}',
            '{{%element_review}}',
            'review_id'
        );

        // add foreign key for table `{{%review}}`
        $this->addForeignKey(
            '{{%fk-element_review-review_id}}',
            '{{%element_review}}',
            'review_id',
            '{{%review}}',
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
            '{{%fk-element_review-element_id}}',
            '{{%element_review}}'
        );

        // drops index for column `element_id`
        $this->dropIndex(
            '{{%idx-element_review-element_id}}',
            '{{%element_review}}'
        );

        // drops foreign key for table `{{%review}}`
        $this->dropForeignKey(
            '{{%fk-element_review-review_id}}',
            '{{%element_review}}'
        );

        // drops index for column `review_id`
        $this->dropIndex(
            '{{%idx-element_review-review_id}}',
            '{{%element_review}}'
        );

        $this->dropTable('{{%element_review}}');
    }
}
