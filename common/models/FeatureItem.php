<?php

namespace common\models;

/**
 *
 * @property \yii\db\ActiveQuery $content
 */
class FeatureItem extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%feature_item}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'string']
        ];
    }

    public function getContent(): \yii\db\ActiveQuery
    {
        return $this->hasMany(FeatureContent::class, ['feature_item_id' => 'id']);
    }

    public function setContent($data)
    {
        $this->save(false);
        foreach ($this->content as $item) {
            $this->unlink('content', $item, true);
            $item->delete();
        }
        foreach ($data as $item) {
            $content = new FeatureContent($item);
            $content->save();
            $this->link('content', $content);
        }
    }
}
