<?php

use common\models\Post;
use yii\helpers\Url;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var View $this
 * @var Post $model
 */

$form = ActiveForm::begin();

echo $form->field($model, 'title')->textInput();

echo $form->field($model, 'summary')->textarea(['rows' => 5]);

echo $form->field($model, 'text')->widget(\vova07\imperavi\Widget::class, [
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 250,
        'imageUpload' => Url::to(['post/image-upload']),
        'plugins' => [
            'clips',
            'fullscreen',
            'imagemanager',
        ],
    ]
]);

echo $form->field($model, 'is_file')->checkbox(['checked' => false]);

echo $form->field($model, 'file', ['options' => ['class' => 'mb-3']])->fileInput();

echo $form->field($model, 'image', ['options' => ['class' => 'mb-3']])->textInput();

echo Html::submitButton(\Yii::t('backend', 'Save'), ['class' => ['btn', 'btn-success']]);

ActiveForm::end();

$this->registerJs("
const isFile = $('#post-is_file');

function is_file() {
    if (isFile.is(':checked')) {
        $('.field-post-file').show()
        $('.field-post-image').hide()
    } else {
        $('.field-post-file').hide()
        $('.field-post-image').show()
    }
}
is_file();

isFile.on('change', is_file)
");
