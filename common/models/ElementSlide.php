<?php

namespace common\models;

class ElementSlide extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%element_slide}}";
    }

    public function rules(): array
    {
        return [
            [['element_id', 'slide_id'], 'integer']
        ];
    }

    public function getElement(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Element::class, ['id' => 'element_id']);
    }

    public function getSlide(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Slide::class, ['id' => 'slide_id']);
    }
}
