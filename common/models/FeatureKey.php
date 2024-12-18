<?php

namespace common\models;

/**
 * @property string $heading
 * @property \yii\db\ActiveQuery $groups
 */
class FeatureKey extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%feature_key}}';
    }

    public function rules(): array
    {
        return [
            [['heading'], 'string']
        ];
    }

    public function beforeDelete()
    {
        foreach ($this->groups as $group) {
            $this->unlink('groups', $group);
            $group->delete();
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

    public function getGroups(): \yii\db\ActiveQuery
    {
        return $this->hasMany(FeatureItem::class, ['feature_key_id' => 'id']);
    }

    public function setGroups($data)
    {
        $this->save(false);
        foreach ($data as $item) {
            $group_item = new FeatureItem($item);
            $group_item->load(['FeatureItem' => $item]);
            $group_item->save();
            $this->link('groups', $group_item);
        }
    }

    public function getElement()
    {
        return $this->hasOne(Element::class, ['id' => 'element_id']);
    }
}
