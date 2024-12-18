<?php

namespace common\models;

/**
 *
 */
class TaskList extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%task_list}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'string'],
            [['picture_id'], 'integer'],
        ];
    }

    public function getList(): \yii\db\ActiveQuery
    {
        return $this->hasMany(ListItem::class, ['parent_id' => 'id'])->where(['type' => ListItem::TYPE_TASK]);
    }

    public function setList($data)
    {
        $this->save(false);
        foreach ($this->list as $list) {
            $this->unlink('list', $list, true);
        }
        foreach ($data as $item) {
            $listItem = new ListItem(array_merge($item, ['type' => ListItem::TYPE_TASK]));
            $listItem->save();
            $this->link('list', $listItem);
        }
    }

    public function getPicture(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Image::class, ['id' => 'picture_id']);
    }

    public function setPicture($data)
    {
        $this->save(false);

        $image = $this->picture;
        if ($image) {
            $this->unlink('picture', $image);
            $image->delete();
        }

        $image = new Image($data);
        $image->save();
        $this->link('picture', $image);
    }
}
