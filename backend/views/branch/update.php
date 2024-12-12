<?php

use common\models\Branch;
use yii\web\View;

/**
 * @var View $this
 * @var Branch $model
 */

$this->title = \Yii::t('backend', 'Update: {name}', ['name' => $model->city]);

$this->params['breadcrumbs'][] = [
    'label' => \Yii::t('backend', 'Branches'),
    'url' => ['branch/index'],
];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model
]);