<?php

namespace common\models;

/**
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $fulltext
 * @property Factor[] $factor_list
 */
class Description extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%description}}";
    }

    public function rules(): array
    {
        return [
            [['title', 'description'], 'string']
        ];
    }

    public function getFactor_list(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Factor::class, ['id' => 'factor_id'])->viaTable('description_factor', ['description_id' => 'id']);
    }

    public function setFactor_list($data)
    {
        $this->save(false);
        foreach ($this->factor_list as $factor) {
            $this->unlink('factor_list', $factor, true);
            $factor->delete();
        }
        foreach ($data as $item) {
            $factor = new Factor($item);
            $factor->save();
            $this->link('factor_list', $factor);
        }
    }
}
