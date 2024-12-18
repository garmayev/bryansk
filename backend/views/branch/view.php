<?php

use common\models\Branch;
use yii\web\View;
use yii\widgets\DetailView;
use yii\helpers\Html;

/**
 * @var View $this
 * @var Branch $model
 */

$this->title = \Yii::t('backend', 'Update: {name}', ['name' => $model->city]);

$this->params['breadcrumbs'][] = [
    'label' => \Yii::t('backend', 'Branches'),
    'url' => ['branch/index'],
];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="mb-3">
    <?= Html::a(\Yii::t('backend', 'Update'), ['/branch/update', 'id' => $model->id], ['class' => 'btn btn-primary mr-3']) ?>

    <?= Html::a(\Yii::t('backend', 'Delete'), ['/branch/delete', 'id' => $model->id], ['class' => 'btn btn-danger mr-3']) ?>
</div>
<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',
        'region',
        'address',
        'phone',
        'email',
        'city',
        'type'
    ],
]);