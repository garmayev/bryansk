<?php

use common\models\Slide;
use common\models\Slider;
use yii\bootstrap5\Modal;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var View $this
 * @var Slider $model
 */

$form = ActiveForm::begin();

echo $form->field($model, 'title', ['options' => ['class' => 'form-group mb-3']])->textInput();

echo $form->field($model, 'branch_id', ['options' => ['class' => 'form-group mb-3']])->dropDownList(
    \yii\helpers\ArrayHelper::map(\common\models\Branch::find()->all(), 'id', 'city'),
)->label(\Yii::t('backend', 'Branch'));

echo $form->field($model, 'is_main')->checkbox();

Modal::begin([
    'size' => 'modal-lg',
    'id' => 'add-slide',
    'scrollable' => true,
    'footer' => Html::tag('span', 'Ok', ['class' => 'btn btn-success', 'data' => ['bs-dismiss' => 'modal']]).
        Html::tag('span', 'Cancel', ['class' => 'btn btn-danger', 'data' => ['bs-dismiss' => 'modal']]),

]);

echo Html::beginTag('div', ['class' => 'row mb-3']);
foreach (Slide::find()->all() as $item)
{
    echo Html::beginTag('div', ['class' => 'col-4 mb-3']);
    echo Html::img($item->image, ['class' => 'slide col-12 mb-3 selectable', 'data' => ['key' => $item->id, 'title' => $item->title]]);
    echo Html::tag('p', $item->title);
    echo Html::endTag('div');
}

echo Html::endTag('div');

Modal::end();

echo Html::tag('span', \Yii::t('backend', 'Add Slide'), [
    'class' => 'btn btn-primary',
    'data' => [
        'bs-toggle' => 'modal',
        'bs-target' => '#add-slide'
    ]
]);

$slides = [];
foreach ($model->slides as $item) {
    $slides[] = Html::tag(
        'div',
        Html::img($item->image, ['class' => 'image']).
            Html::tag('p', $item->title).
            Html::a('', ["#"], ['class' => 'btn btn-danger fa fas-trash remove']).
            Html::hiddenInput('Slider[slides][]', $item->id),
        ['class' => 'col-2']
    );
}

echo Html::tag('div', implode(" ", $slides), ['class' => 'row slides mt-3 mb-3']);

echo Html::submitButton(\Yii::t('backend', 'Save'), ['class' => 'btn btn-success']);

ActiveForm::end();

$this->registerCss(<<<CSS
.slides > .col-2 {
    position: relative;
}
.compress {
    border-radius: 5px;
}
.image {
    width: 100%;
}
.slides > .col-2:hover > .update, .slides > .col-2:hover > .remove, .slides > .col-2:hover > .view {
    opacity: 1;
}
.update, .remove, .view {
    width: 30px;
    height: 30px;
    position: absolute;
    top: 0;
    opacity: 0;
    transition: opacity .5s;
}
.remove {
    right: 10px;
}
.update {
    right: 45px;
}
.view {
    right: 80px;
}
.select {
    border: 4px solid green;
}
CSS);

$this->registerJs(<<<JS
function remove(e) {
    e.preventDefault();
    $(this).parent().remove()
}
function select() {
    $(this).toggleClass('select');
}
function append() {
    const selected = $('.modal-body .slide.select');
    selected.each(function () {
        const container = $(`<div class="col-2"></div>`);
        const image = $(`<img class="image" src="\${\$(this).attr('src')}" />`);
        const title = $(`<p>\${\$(this).attr('data-title')}</p>`);
        const input = $(`<input type="hidden" name="Slider[slides][]" value="\${\$(this).attr("data-key")}" />`); 
        const link = $(`<a class="btn btn-danger fa fas-trash remove" href="#"></a>`);
        link.on('click', remove)
        container.append(image, link, input);
        $('.slides').append(container);
    })
    selected.toggleClass('select');
}
$(".selectable").on('click', select)
$(".slides .col-2 .remove").on("click", remove);
$(".modal-footer .btn-success").on("click", append)
JS);