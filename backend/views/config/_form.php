<?php

use common\models\Config;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var View $this
 * @var Config $model
 */

$form = ActiveForm::begin();

echo $form->field($model, 'type')->hiddenInput()->label(false);

echo $form->field($model, 'description')->hiddenInput()->label(false);

echo $form->field($model, 'title')->hiddenInput()->label(false);

switch ($model->type) {
    case 'text':
    case 'int':
        echo $form->field($model, 'value')->textInput();
        break;
    case 'longtext':
        echo $form->field($model, 'value')->widget(\vova07\imperavi\Widget::class, [
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 250,
                'plugins' => [
                    'clips',
                    'fullscreen',
                ],
            ]
        ]);
        break;
}

echo Html::submitButton(\Yii::t('backend', 'Save'), ['class' => 'btn btn-primary']);

ActiveForm::end();
