<?php

use common\models\Element;
use yii\helpers\Url;
use yii\web\View;

/**
 * @var View $this
 * @var Element $model
 */
?>
<div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="/systems/<?= $model->section->code ?>/<?= $model->code ?>" class="card__inner">
        <div class="card__img">
            <img class="image is-lazy isItemProp is-loaded" src="<?= $model->image ?>" data-src="<?= $model->image ?>" itemprop="contentUrl" alt="РСМ Агротроник" data-ll-status="loaded">
        </div>
        <div class="card__info">
            <div class="card__info-wrap">
                <div class="card__title text-lead animate" data-animate-lines="" itemprop="name" style="opacity: 1;">
                    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;"><?= $model->name ?></div>
                </div>
            </div>
        </div>
    </a>
</div>
