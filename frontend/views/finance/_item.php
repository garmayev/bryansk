<?php
/**
 * @var View $this
 * @var Event $model
 */

use common\models\Event;
use yii\web\View;
use yii\helpers\Url;
?>
<div class="card-universal" data-animate="">
    <a href="<?= Url::to(['/finance/view-event', 'id' => $model->id]) ?>" class="card-universal__link">Подробнее</a>
    <div class="card-universal__inner">
        <div class="card-universal__top">
            <div class="card-universal__image">
                <img class="image is-lazy is-cover entered is-loaded" src="<?= $model->image ?>" data-src="<?= $model->image ?>" alt="<?= $model->title ?>" title="<?= $model->title ?>" data-ll-status="loaded">
            </div>
        </div>
        <div class="card-universal__bottom">
            <div class="card-universal__title">
                <h5 class="h5" data-animate-lines=""><a href="<?= Url::to(['/finance/view-event', 'id' => $model->id]) ?>"><?= $model->title ?></a></h5>
                <br>
                <p>
                    Акция действует: с <?= $model->date ?>
                </p>
            </div>
            <div class="card-universal__bottom-left">
            </div>
            <div class="card-universal__bottom-right">
            </div>
        </div>
    </div>
</div>