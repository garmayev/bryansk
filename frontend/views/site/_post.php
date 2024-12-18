<?php

/**
 * @var View $this
 * @var Post $model
 */

use common\models\Post;
use yii\web\View;
use yii\helpers\Url;
?>
<div class="events-list__col">
    <div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
        <a href="<?= Url::to(['post/view', 'id' => $model->id]) ?>" class="card__inner">
            <div class="card__img">
                <div class="image is-lazy isItemProp" role="img"
                     aria-label="Старт нового производства в Таганроге"
                     data-bg="<?= $model->image ?>"></div>
            </div>

            <div class="card__info">
                <div class="card__info-wrap">
                    <div class="card__date" data-animate-lines=""><?= \Yii::$app->formatter->asDate($model->created_at, 'dd.MM.yyyy') ?></div>

                    <div class="card__title text-lead" data-animate-lines="" itemprop="name">
                        <?= $model->title ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

