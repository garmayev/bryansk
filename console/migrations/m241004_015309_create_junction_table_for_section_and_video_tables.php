<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%section_video}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%section}}`
 * - `{{%video}}`
 */
class m241004_015309_create_junction_table_for_section_and_video_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%section_video}}', [
            'section_id' => $this->integer(),
            'video_id' => $this->integer(),
            'PRIMARY KEY(section_id, video_id)',
        ]);

        // creates index for column `section_id`
        $this->createIndex(
            '{{%idx-section_video-section_id}}',
            '{{%section_video}}',
            'section_id'
        );

        // add foreign key for table `{{%section}}`
        $this->addForeignKey(
            '{{%fk-section_video-section_id}}',
            '{{%section_video}}',
            'section_id',
            '{{%section}}',
            'id',
            'CASCADE'
        );

        // creates index for column `video_id`
        $this->createIndex(
            '{{%idx-section_video-video_id}}',
            '{{%section_video}}',
            'video_id'
        );

        // add foreign key for table `{{%video}}`
        $this->addForeignKey(
            '{{%fk-section_video-video_id}}',
            '{{%section_video}}',
            'video_id',
            '{{%video}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%section}}`
        $this->dropForeignKey(
            '{{%fk-section_video-section_id}}',
            '{{%section_video}}'
        );

        // drops index for column `section_id`
        $this->dropIndex(
            '{{%idx-section_video-section_id}}',
            '{{%section_video}}'
        );

        // drops foreign key for table `{{%video}}`
        $this->dropForeignKey(
            '{{%fk-section_video-video_id}}',
            '{{%section_video}}'
        );

        // drops index for column `video_id`
        $this->dropIndex(
            '{{%idx-section_video-video_id}}',
            '{{%section_video}}'
        );

        $this->dropTable('{{%section_video}}');
    }
}
