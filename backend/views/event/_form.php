<?php

use common\models\Event;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;

/**
 * @var View $this
 * @var Event $model
 */

$form = ActiveForm::begin();

echo $form->field($model, 'title');

echo $form->field($model, 'text')->widget(\vova07\imperavi\Widget::class, [
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 250,
        'maxHeight' => 300,
        'imageUpload' => Url::to(['post/image-upload']),
        'plugins' => [
            'clips',
            'fullscreen',
            'imagemanager',
        ],
    ]
]);

echo $form->field($model, 'file')->fileInput(['class' => 'form-control mb-3']);

echo Html::tag('div', Html::img($model->image ?? '#', ['class' => 'col-3', 'id' => 'preview-image']), ['class' => 'row mb-3', 'id' => 'preview']);

echo $form->field($model, 'status')->dropDownList([
    Event::STATUS_DISABLED => \Yii::t('backend', 'Disabled'),
    Event::STATUS_ENABLED => \Yii::t('backend', 'Enabled')
], ['class' => 'form-control mb-3']);

echo Html::submitButton(\Yii::t('backend', 'Save'), ['class' => 'btn btn-success mt-2']);

ActiveForm::end();

$this->registerJs(<<<JS
$('#event-file').on('change', function (event) {
    const [file] = $('#event-file').prop('files');
    if (file) {
        $('#preview-image').attr('src', URL.createObjectURL(file))
    }
})
JS);