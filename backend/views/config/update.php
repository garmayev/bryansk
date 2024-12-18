<?php

use common\models\Config;
use yii\web\View;


/**
 * @var View $this
 * @var Config $model
 */

$this->title = \Yii::t('backend', 'Update: {title}', ['title' => $model->title]);

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Configuration'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model,
]);
