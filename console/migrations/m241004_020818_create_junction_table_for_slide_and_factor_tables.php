<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slide_factor}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%slide}}`
 * - `{{%factor}}`
 */
class m241004_020818_create_junction_table_for_slide_and_factor_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slide_factor}}', [
            'slide_id' => $this->integer(),
            'factor_id' => $this->integer(),
            'PRIMARY KEY(slide_id, factor_id)',
        ]);

        // creates index for column `slide_id`
        $this->createIndex(
            '{{%idx-slide_factor-slide_id}}',
            '{{%slide_factor}}',
            'slide_id'
        );

        // add foreign key for table `{{%slide}}`
        $this->addForeignKey(
            '{{%fk-slide_factor-slide_id}}',
            '{{%slide_factor}}',
            'slide_id',
            '{{%slide}}',
            'id',
            'CASCADE'
        );

        // creates index for column `factor_id`
        $this->createIndex(
            '{{%idx-slide_factor-factor_id}}',
            '{{%slide_factor}}',
            'factor_id'
        );

        // add foreign key for table `{{%factor}}`
        $this->addForeignKey(
            '{{%fk-slide_factor-factor_id}}',
            '{{%slide_factor}}',
            'factor_id',
            '{{%factor}}',
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
            '{{%fk-slide_factor-slide_id}}',
            '{{%slide_factor}}'
        );

        // drops index for column `slide_id`
        $this->dropIndex(
            '{{%idx-slide_factor-slide_id}}',
            '{{%slide_factor}}'
        );

        // drops foreign key for table `{{%factor}}`
        $this->dropForeignKey(
            '{{%fk-slide_factor-factor_id}}',
            '{{%slide_factor}}'
        );

        // drops index for column `factor_id`
        $this->dropIndex(
            '{{%idx-slide_factor-factor_id}}',
            '{{%slide_factor}}'
        );

        $this->dropTable('{{%slide_factor}}');
    }
}
