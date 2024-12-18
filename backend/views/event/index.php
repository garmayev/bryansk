<?php

use common\models\Event;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\web\View;
use yii\grid\GridView;

/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */

$this->title = \Yii::t('backend', 'Events');
$this->params['breadcrumbs'][] = $this->title;

echo Html::a(\Yii::t('backend', 'Create Event'), ['/event/create'], ['class' => 'btn btn-success mb-3 mr-3']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'tableOptions' => [
        'class' => 'table table-striped'
    ],
    'columns' => [
        'title',
        [
            'attribute' => 'image',
            'format' => 'raw',
            'value' => function (Event $model) {
                return Html::img($model->image, ['style' => 'max-height: 150px']);
            }
        ],
        [
            'attribute' => 'status',
            'format' => 'raw',
            'value' => function (Event $model) {
                if ( Event::STATUS_DISABLED ) {
                    return \Yii::t('backend', 'Disabled');
                } else {
                    return \Yii::t('backend', 'Enabled');
                }
            }
        ],
        [
            'attribute' => 'date',
            'label' => \Yii::t('backend', 'Date'),
        ],
        [
            'class' => ActionColumn::class
        ],
    ]
]);