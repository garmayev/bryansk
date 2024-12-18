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

    public function beforeDelete()
    {
        foreach ($this->content as $content) {
            $this->unlink('content', $content);
            $content->delete();
        }
        return parent::beforeDelete();
    }

    private function findSubclass($className, $data)
    {
        $query = $className::find();
        foreach ($data as $key => $item) {
            if (!is_array($item)) {
                $query->andWhere([$key => $item]);
            }
        }
        return $query->one();
    }

    public function getContent(): \yii\db\ActiveQuery
    {
        return $this->hasMany(FeatureContent::class, ['feature_item_id' => 'id']);
    }

    public function setContent($data)
    {
        $this->save(false);
        foreach ($data as $item) {
            $content = new FeatureContent($item);
            $content->save();
            $this->link('content', $content);
        }
    }
}
