<?php

namespace common\models;

use yii\db\ActiveRecord;

class Branch extends ActiveRecord
{
    const TYPE_POINT = 0;
    const TYPE_BUILD = 1;
    public static function tableName(): string
    {
        return '{{%branch}}';
    }

    public function rules()
    {
        return [
            [['title', 'region', 'address', 'phone', 'email', 'city'], 'string'],
            [['latitude', 'longitude'], 'double'],
            [['type'], 'integer'],
            [['type'], 'default', 'value' => self::TYPE_BUILD]
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'title' => \Yii::t('backend', 'Title'),
            'region' => \Yii::t('backend', 'Region'),
            'address' => \Yii::t('backend', 'Address'),
            'phone' => \Yii::t('backend', 'Phone'),
            'email' => \Yii::t('backend', 'Email'),
            'city' => \Yii::t('backend', 'City'),
            'Type' => \Yii::t('backend', 'Type'),
            'is_main' => \Yii::t('backend', 'Is Main'),
        ];
    }

    public function getSliders()
    {
        return $this->hasMany(Slider::class, ['branch_id' => 'id']);
    }
}