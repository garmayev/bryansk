<?php

use common\models\Branch;
use yii\web\View;

/**
 * @var View $this
 * @var Branch $model
 */

$this->title = \Yii::t('backend', 'Create Branch');

$this->params['breadcrumbs'][] = [
    'label' => \Yii::t('app', 'Branches'),
    'url' => ['branch/index'],
];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model
]);