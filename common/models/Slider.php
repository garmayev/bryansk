<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * @property string $title
 * @property Slide[] $slides
 * @property integer $branch_id
 * @property integer $is_main
 */
class Slider extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%slider}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'string'],
            [['branch_id', 'is_main'], 'integer'],
            [['branch_id'], 'exist', 'targetClass' => Branch::class, 'targetAttribute' => ['branch_id' => 'id']],
            [['slides'], 'safe']
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'title' => \Yii::t('backend', 'Title')
        ];
    }

    public function getBranch()
    {
        return $this->hasOne(Branch::class, ['id' => 'branch_id']);
    }

    public function getSlides(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Slide::class, ['id' => 'slide_id'])->viaTable('slider_slide', ['slider_id' => 'id']);
    }

    public function setSlides($data)
    {
        $this->save(false);
        foreach ($this->slides as $slide) {
            $this->unlink('slides', $slide, true);
        }
        foreach ($data as $item) {
            $slide = Slide::findOne($item);
            $this->link('slides', $slide);
        }
    }
}