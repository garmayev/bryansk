<?php

use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\View;
use yii\helpers\Html;

/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */

$this->title = \Yii::t('backend', 'Sliders');

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">
    <?= Html::a(\Yii::t('backend', 'Create Slider'), ['slider/create'], ['class' => 'btn btn-success']) ?>
</div>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'tableOptions' => [
        'class' => ['table', 'table-striped']
    ],
    'columns' => [
        'title',
        [
            'class' => ActionColumn::class
        ]
    ]
]);