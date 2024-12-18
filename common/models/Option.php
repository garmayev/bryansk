<?php

namespace common\models;

/**
 * @property string $heading
 * @property string $text
 */
class Option extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%option}}';
    }

    public function rules(): array
    {
        return [
            [['heading', 'text'], 'string'],
            [['element_id'], 'integer']
        ];
    }

    public function getSlider(): \yii\db\ActiveQuery
    {
        return $this->hasMany(EquipmentSlider::class, ['id' => 'equipment_slider_id'])->viaTable('option_equipment_slider', ['option_id' => 'id']);
    }

    public function setSlider($data)
    {
        $this->save(false);
        foreach ($this->slider as $slider)
        {
            $this->unlink('slider', $slider, true);
            $slider->delete();
        }

        foreach ($data as $item)
        {
            if (empty($slide = EquipmentSlider::findOne($item['id']))) {
                $slide = new EquipmentSlider($item);
                $slide->save();
            }
            $this->link('slider', $slide);
        }
    }
}
