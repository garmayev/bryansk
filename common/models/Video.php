<?php

namespace common\models;

class Video extends \yii\db\ActiveRecord
{
    public function rules(): array
    {
        return [
            [['src', 'poster', 'description'], 'string'],
        ];
    }

    public function getSections()
    {
        return $this->hasMany(Section::class, ['id' => 'section_id'])->viaTable('section_video', ['video_id' => 'id']);
    }

    public function getElements()
    {
        return $this->hasMany(Element::class, ['id' => 'element_id'])->viaTable('element_video', ['video_id' => 'id']);
    }
}
