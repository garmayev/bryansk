<?php

use yii\web\View;
use yii\helpers\Html;

/**
 * @var View $this
 */

$this->title = \Yii::t('backend', 'Feed');

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mb-3">
    <?= Html::a(\Yii::t('backend', 'Import Feed'), ['/feed/import'], ['class' => ['btn', 'btn-success', 'mr-3']]) ?>
    <?= Html::a(\Yii::t('backend', 'Upload Images'), ['/feed/upload-images'], ['class' => ['btn', 'btn-primary', 'mr-3']]) ?>
</div>
