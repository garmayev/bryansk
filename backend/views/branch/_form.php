<?php

use common\models\Branch;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var View $this
 * @var Branch $model
 */

$this->registerJsFile("https://api-maps.yandex.ru/2.1/?apikey=bc709e46-0fb9-47fe-89f5-c75b3164cdfe&lang=ru_RU");

$form = ActiveForm::begin();

echo $form->field($model, 'title')->textInput();

echo $form->field($model, 'region')->textInput();

echo $form->field($model, 'city')->textInput();

echo $form->field($model, 'address')->textInput();

echo $form->field($model, 'phone')->textInput();

echo $form->field($model, 'email')->textInput();

echo $form->field($model, 'latitude')->textInput();

echo $form->field($model, 'longitude')->textInput();

echo Html::tag('div', '', ['id' => 'map', 'class' => 'my-3', 'style' => 'height: 400px;']);

echo Html::submitButton(\Yii::t('backend', 'Save'), ['class' => 'btn btn-success']);

$this->registerJsVar('model', $model);
$this->registerJs(<<<JS
    ymaps.ready(init);
    function init() {
        const myMap = new ymaps.Map("map", {
            center: [model.latitude, model.longitude],
            zoom: 13,
            controls: ['zoomControl'],
        });

        if (model.latitude && model.longitude) {
            let myGeoObject = new ymaps.Placemark([model.latitude, model.longitude], {
                balloonContentHeader: 'АО "Октябрьское"',
                balloonContentBody: '<p>392014, Тамбовская Область, г. Тамбов,<br />ул. Киквидзе, 77</p><p>Время работы: Пн-Пт, с 09:00 - 17:00</p><p>Тел: +7 (3012) 378-006</p>',
            }, {
                iconLayout: 'default#imageWithContent',
                iconImageHref: '/dist/img/map-icon/001.svg',
                iconImageSize: [76, 43],
                iconImageOffset: [-8, -42],
                interactiveZIndex: true,
            });
            myMap.geoObjects.add(myGeoObject);
        }
    }
JS);

ActiveForm::end();