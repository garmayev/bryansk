<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;


/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */

$this->title = \Yii::t('backend', 'Certificates');

echo Html::beginTag('div', ['class' => 'mb-3']);
echo Html::a(\Yii::t('backend', 'Create Certificate'), ['/certificate/create'], ['class' => 'btn btn-success']);
echo Html::endTag('div');

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'tableOptions' => [
        'class' => 'table table-striped'
    ],
    'columns' => [
        'name',
        'href',
        'size',
        [
            'class' => \yii\grid\ActionColumn::class
        ]
    ]
]);
