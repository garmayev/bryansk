<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Description $model
 * @var boolean $configure
 */
?>
<div class="wrapper b-reviews">
    <div class="block-slider wrapper">
        <div class="block-slider__slide-content-wrap">
            <div class="product-description__title h2 animate">
                <h4 class="block-slider__slide-content-title">
                    <?= $model->title ?>
                </h4>
            </div>
            <div class="block-slider__slide-content-text animate" data-animate="">
                <h5 class="text user-text">
                    <p>
                        <?= $model->description ?>
                    </p>
                </h5>
                <div class="full-text">
                    <?= $model->fulltext ?>
                </div>
                <div class="block-slider__slide-content-link">
                    <?= $configure ? \yii\helpers\Html::a("Конфигуратор", ["/configurator/"], [
                        "class" => "configurator-btn-mobile btn btn--small btn--primary btn--hover-gray",
                        "style" => "flex-grow: 0; flex-shrink: 1; width: auto; margin-right: 30px;"
                    ]) : "" ?>
                    <?= \yii\helpers\Html::a("Читать полностью", "#modal--case-$model->id",[
                        "class" => "text-link reviews_detail text-default text-link--underline user-text",
                        "data-modal" => "",
                        "data-effect" => "mfp-move-from-left",
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
