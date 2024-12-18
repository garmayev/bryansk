<?php

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\grid\GridView;

/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */

$this->title = \Yii::t('backend', 'Configuration');

$this->params['breadcrumbs'][] = $this->title;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'tableOptions' => [
        'class' => 'table table-striped table-hover',
    ],
    'columns' => [
        'description',
        [
            'attribute' => 'value',
            'format' => 'raw',
            'value' => function (\common\models\Config $model) {
                $length = 110;
                if (strlen($model->value) > $length) {
                    $shortStr = trim(substr($model->value, 0 , $length - 3));
                    $shortStr = trim($shortStr).'...';
                    return $shortStr;
                }
                return $model->value;
            }
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update}'
        ]
    ]
]);
