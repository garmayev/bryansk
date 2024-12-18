<?php

namespace common\models;

/**
 * @property Section[] $sections
 * @property Video[] $videos
 */
class SectionVideo extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%section_video}}';
    }

    public function rules()
    {
        return [
            [['section_id', 'video_id'], 'integer'],
        ];
    }

    public function getSections()
    {
        return $this->hasMany(Section::class, ['id' => 'section_id']);
    }

    public function getVideos()
    {
        return $this->hasMany(Video::class, ['id' => 'video_id']);
    }
}
