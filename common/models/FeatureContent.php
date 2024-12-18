<?php

namespace common\models;

class FeatureContent extends \yii\db\ActiveRecord
{
    public $dop_foto = [];

    public static function tableName(): string
    {
        return '{{%feature_content}}';
    }

    public function rules(): array
    {
        return [
            [['toggle', 'content'], 'string'],
            [['image_id', 'feature_item_id'], 'integer'],
        ];
    }

    public function getImage(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Image::class, ['id' => 'image_id']);
    }

    public function setImage($data)
    {
        $this->save(false);
        if ($this->image) {
            $image = $this->image;
            $this->unlink('image', $image);
        }
        $image = new Image($data);
        $image->save();
        $this->link('image', $image);
    }
}
