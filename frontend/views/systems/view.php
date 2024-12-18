<?php

use common\models\Element;
use common\models\Section;
use common\models\Video;
use yii\web\View;

/**
 * @var View $this
 * @var Section $model
 */

$this->title = $model->name;
?>
<script src="/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme('black')
    })
</script>

<div class="pt-md-160 pt-96  mb-40 my-2-fixed wrapper wrap-pl-1 wrap-pr-1">
    <div class="page-heading">
        <a href="/systems/" class="text-lead page-heading__link mb-16" data-link-animate="">Точное земледелие</a>
        <h1 class="h2 page-heading__title"><?= $model->name ?></h1>
    </div>
</div>
<div class="pb-2-fixed wrap-pl-1 wrap-pr-1">
    <div class="card-list">
            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => new \yii\data\ArrayDataProvider([
                    'allModels' => $model->elements,
                ]),
                'itemView' => '_element',
                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'card-list__item'
                ],
                'options' => [
                    'tag' => 'div',
                    'class' => 'card-list__items',
                ],
                'summary' => false,
            ]);
            ?>
    </div>
</div>

<?php
$videos = Video::find()->joinWith('elements')->where(['element.type' => Element::TYPE_ELECTRONIC_SYSTEM])->all();
echo $this->render('_video', [
    'models' => $videos
]);
?>

<?= $this->render('/layouts/_interest') ?>
