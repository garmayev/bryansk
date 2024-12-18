<?php

namespace common\models;

/**
 *
 * @property string $title
 * @property string $head_text
 * @property string $bottom_list
 *
 * @property ListItem $left_list
 * @property ListItem $right_list
 */
class DescriptionList extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%description_list}}';
    }

    public function rules(): array
    {
        return [
            [['title', 'head_text', 'bottom_list'], 'string'],
            [['left_list', 'right_list'], 'integer']
        ];
    }

    public function getLeft_list(): \yii\db\ActiveQuery
    {
        return $this->hasMany(ListItem::class, ['parent_id' => 'id'])->andWhere(['type' => ListItem::TYPE_DESCRIPTION_LEFT]);
    }

    public function setLeft_list($data)
    {
        $this->save(false);
        foreach ($this->left_list as $left_list) {
            $this->unlink('left_list', $left_list, true);
            $left_list->delete();
        }
        foreach ($data as $item) {
            $listItem = new ListItem(['text' => $item, 'type' => ListItem::TYPE_DESCRIPTION_LEFT]);
            $listItem->save();
            $this->link('left_list', $listItem);
        }
    }

    public function getRight_list(): \yii\db\ActiveQuery
    {
        return $this->hasMany(ListItem::class, ['parent_id' => 'id'])->andWhere(['type' => ListItem::TYPE_DESCRIPTION_RIGHT]);
    }

    public function setRight_list($data)
    {
        $this->save(false);
        foreach ($this->right_list as $right_list) {
            $this->unlink('right_list', $right_list, true);
            $right_list->delete();
        }
        foreach ($data as $item) {
            $listItem = new ListItem(['text' => $item, 'type' => ListItem::TYPE_DESCRIPTION_RIGHT]);
            $listItem->save();
            $this->link('left_list', $listItem);
        }
    }
}
