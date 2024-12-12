<?php

use common\models\Post;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;


/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */

echo Html::a(\Yii::t('backend', 'Create Post'), ['/post/create'], ['class' => ['btn', 'btn-success', 'mb-3']]);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'tableOptions' => [
        'class' => ['table', 'table-striped', 'table-hover']
    ],
    'columns' => [
        'title',
        'created_at:date',
        [
            'class' => \yii\grid\ActionColumn::class
        ]
    ]
]);
