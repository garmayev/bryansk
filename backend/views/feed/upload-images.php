<?php

use yii\web\View;

/**
 * @var View $this
 * @var string $result
 */

$this->title = \Yii::t('backend', 'Upload Images');

$this->params['breadcrumbs'][] = ['url' => ['/feed/index'], 'label' => 'Feed'];
$this->params['breadcrumbs'][] = $this->title;



echo $result;
