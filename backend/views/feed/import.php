<?php

use yii\web\View;


/**
 * @var View $this
 * @var string $result
 */

$this->title = \Yii::t('backend', 'Import Feed');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Feed'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $result;
