<?php

namespace common\models;

/**
 *
 * @property string $heading
 * @property string $lead
 * @property string $content
 * @property integer $element_id
 *
 * @property \yii\db\ActiveQuery $factors
 */
class Guarantee extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%guarantee}}';
    }

    public function rules(): array
    {
        return [
            [['heading', 'lead', 'content'], 'string'],
            [['element_id'], 'integer'],
        ];
    }

    public function getFactors(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Factor::class, ['id' => 'factor_id'])->viaTable('guarantee_factor', ['guarantee_id' => 'id']);
    }

    public function setFactors($data)
    {
        $this->save(false);
        foreach ($this->factors as $factor) {
            $this->unlink('factors', $factor, true);
        }
        foreach ($data as $item) {
            $factor = new Factor($item);
            $factor->save();
            $this->link('factors', $factor);
        }
    }
}
