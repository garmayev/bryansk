<?php

namespace common\models;

use yii\db\Exception;
use yii\db\StaleObjectException;

/**
 * @property string $heading
 * @property integer $element_id
 *
 * @property TechItem[] $accordions
 */
class Tech extends \yii\db\ActiveRecord
{
    public $legend;
    public $action;

    public static function tableName(): string
    {
        return "{{%tech}}";
    }

    public function rules(): array
    {
        return [
            [['heading'], 'string'],
            [['element_id'], 'integer']
        ];
    }

    public function getAccordions(): \yii\db\ActiveQuery
    {
        return $this->hasMany(TechItem::class, ['tech_id' => 'id']);
    }

    /**
     * @throws \Throwable
     * @throws Exception
     * @throws StaleObjectException
     */
    public function setAccordions($data)
    {
        $this->save(false);
        foreach ($this->accordions as $accordion) {
            $this->unlink('accordions', $accordion, true);
            $accordion->delete();
        }
        foreach ($data as $item) {
            $tech_item = new TechItem($item);
            $tech_item->save();
            $this->link('accordions', $tech_item);
        }
    }
}
