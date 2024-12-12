<?php

namespace common\models;

class Equipment extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%equipment}}";
    }

    public function rules(): array
    {
        return [
            [['heading'], 'string'],
            [['element_id'], 'integer']
        ];
    }

    public function getSlider(): \yii\db\ActiveQuery
    {
        return $this->hasMany(EquipmentSlider::class, ['id' => 'equipment_slider_id'])->viaTable('equipment_equipment_slider', ['equipment_id' => 'id']);
    }

    public function setSlider($data)
    {
        $this->save(false);
        foreach ($this->slider as $slide) {
            $this->unlink('slider', $slide, true);
        }
        foreach ($data as $item) {
            if (empty($slide = EquipmentSlider::findOne($item['id']))) {
                $slide = new EquipmentSlider($item);
                $slide->save();
            } else {
                $slide->load(['EquipmentSlider' => $item]);
                $slide->save();
            }
            $this->link('slider', $slide);
        }
    }
}
