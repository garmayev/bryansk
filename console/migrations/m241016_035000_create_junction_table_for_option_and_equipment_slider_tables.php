<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%option_equipment_slider}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%option}}`
 * - `{{%equipment_slider}}`
 */
class m241016_035000_create_junction_table_for_option_and_equipment_slider_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%option_equipment_slider}}', [
            'option_id' => $this->integer(),
            'equipment_slider_id' => $this->integer(),
            'PRIMARY KEY(option_id, equipment_slider_id)',
        ]);

        // creates index for column `option_id`
        $this->createIndex(
            '{{%idx-option_equipment_slider-option_id}}',
            '{{%option_equipment_slider}}',
            'option_id'
        );

        // add foreign key for table `{{%option}}`
        $this->addForeignKey(
            '{{%fk-option_equipment_slider-option_id}}',
            '{{%option_equipment_slider}}',
            'option_id',
            '{{%option}}',
            'id',
            'CASCADE'
        );

        // creates index for column `equipment_slider_id`
        $this->createIndex(
            '{{%idx-option_equipment_slider-equipment_slider_id}}',
            '{{%option_equipment_slider}}',
            'equipment_slider_id'
        );

        // add foreign key for table `{{%equipment_slider}}`
        $this->addForeignKey(
            '{{%fk-option_equipment_slider-equipment_slider_id}}',
            '{{%option_equipment_slider}}',
            'equipment_slider_id',
            '{{%equipment_slider}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%option}}`
        $this->dropForeignKey(
            '{{%fk-option_equipment_slider-option_id}}',
            '{{%option_equipment_slider}}'
        );

        // drops index for column `option_id`
        $this->dropIndex(
            '{{%idx-option_equipment_slider-option_id}}',
            '{{%option_equipment_slider}}'
        );

        // drops foreign key for table `{{%equipment_slider}}`
        $this->dropForeignKey(
            '{{%fk-option_equipment_slider-equipment_slider_id}}',
            '{{%option_equipment_slider}}'
        );

        // drops index for column `equipment_slider_id`
        $this->dropIndex(
            '{{%idx-option_equipment_slider-equipment_slider_id}}',
            '{{%option_equipment_slider}}'
        );

        $this->dropTable('{{%option_equipment_slider}}');
    }
}
