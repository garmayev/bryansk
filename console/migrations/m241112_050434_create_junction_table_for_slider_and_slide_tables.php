<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slider_slide}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%slider}}`
 * - `{{%slide}}`
 */
class m241112_050434_create_junction_table_for_slider_and_slide_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slider_slide}}', [
            'slider_id' => $this->integer(),
            'slide_id' => $this->integer(),
            'PRIMARY KEY(slider_id, slide_id)',
        ]);

        // creates index for column `slider_id`
        $this->createIndex(
            '{{%idx-slider_slide-slider_id}}',
            '{{%slider_slide}}',
            'slider_id'
        );

        // add foreign key for table `{{%slider}}`
        $this->addForeignKey(
            '{{%fk-slider_slide-slider_id}}',
            '{{%slider_slide}}',
            'slider_id',
            '{{%slider}}',
            'id',
            'CASCADE'
        );

        // creates index for column `slide_id`
        $this->createIndex(
            '{{%idx-slider_slide-slide_id}}',
            '{{%slider_slide}}',
            'slide_id'
        );

        // add foreign key for table `{{%slide}}`
        $this->addForeignKey(
            '{{%fk-slider_slide-slide_id}}',
            '{{%slider_slide}}',
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
        // drops foreign key for table `{{%slider}}`
        $this->dropForeignKey(
            '{{%fk-slider_slide-slider_id}}',
            '{{%slider_slide}}'
        );

        // drops index for column `slider_id`
        $this->dropIndex(
            '{{%idx-slider_slide-slider_id}}',
            '{{%slider_slide}}'
        );

        // drops foreign key for table `{{%slide}}`
        $this->dropForeignKey(
            '{{%fk-slider_slide-slide_id}}',
            '{{%slider_slide}}'
        );

        // drops index for column `slide_id`
        $this->dropIndex(
            '{{%idx-slider_slide-slide_id}}',
            '{{%slider_slide}}'
        );

        $this->dropTable('{{%slider_slide}}');
    }
}
