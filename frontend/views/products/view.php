<?php
/**
 *
 * @var \yii\web\View $this
 * @var \common\models\Section $model
 */

$this->title = $model->name;
?>
<script src="/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme('black')

        document.querySelector(".tabs-list__el:first-child")?.classList.add('active');
        document.querySelectorAll(".tabs-list__el").forEach((item) => {
            item.addEventListener("click", event => {
                document.querySelectorAll(".tabs-content__el").forEach(content => {
                    content.classList.remove("active")
                })
                document.querySelector(`.tabs-content__el[data-hash="${event.currentTarget.getAttribute("data-hash")}"]`).classList.add("active")
            });
        })
    })
</script>
<style>
    .wrapper .b-reviews {
        padding-bottom: 50px;
    }

    .tabs-content {
        padding-top: 5rem;
        padding-bottom: 4rem;
    }

    .tabs__head {
        margin-bottom: 0 !important;
    }

    .block-slider__slide-content-wrap {
        width: 100%;
        min-height: unset;
        padding-top: 0;
    }

    .product-description__head .product-description__title {
        max-width: 31.25rem;
    }

    .product-description__title {
        flex: 1;
        max-width: 100%;
        width: 100%;
    }

    .block-slider__slide-content-text {
        max-width: 50%;
        width: 100%;
    }

    .b-reviews h4 {
        max-width: 31.25rem;
        width: 100%;
        font-size: 52.5px;
        line-height: 70px;
        color: #101010;
    }

    .b-reviews h5 {
        font-weight: normal;
        /*font-size: 21px;
        line-height: 31px;*/
        color: #101010;
    }

    .block-slider__slide-content-wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
    }

    .block-slider__slide-content-text .text p:not(:last-child) {
        margin-bottom: 20px;
    }

    @media (max-width: 1550px) {
        .product-description__title,
        .b-reviews h4 {
            font-size: 36px;
            line-height: 45px;
        }
    }

    @media (max-width: 1300px) {
        .product-description__title, .b-reviews h4 {
            font-size: 28px;
            line-height: 32px;
        }
    }

    @media (max-width: 700px) {
        .tabs-content {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }

        .block-slider__slide-content-wrap {
            flex-direction: column;
        }

        .block-slider__slide-content-text {
            max-width: 100%;
            margin-top: 1rem;
        }
    }

    @media (max-width: 400px) {
        .product-description__title, .b-reviews h4 {
            font-size: 20px;
            line-height: 24px;
        }
    }
</style>
<div class="pt-md-200 pt-96 wrapper wrap-pl-1 wrap-pr-1 pb-lg-160 pb-96 bg-gray">
    <?= \yii\helpers\Html::a("Продукция", ['/products/index'], ['class' => 'text-lead page-heading__link mb-16']) ?>
    <h1 class="h2 page-heading__title"><?= $model->name ?></h1>
</div>
<div class="wrapper wrap-pl-1 wrap-pr-1">
    <div class="product-cards-list">
        <div class="product-cards-list__wrap">
            <div class="product-cards-list__content">
                <div class="tabs " data-hash-tabs="">
                    <div class="tabs__wrap">
                        <div class="tabs__head">
                            <div class="tabs-list">
                                <div class="tabs-list__wrap js-tabs-list">
                                    <button class="tabs-list__fade tabs-list__fade--left js-tab-scroll"
                                            data-direction="left"></button>
                                    <button class="tabs-list__fade tabs-list__fade--right js-tab-scroll"
                                            data-direction="right"></button>
                                    <?php
                                    foreach ($model->child as $key => $item) {
                                        echo \yii\helpers\Html::tag('button', $item->name, [
                                            'type' => 'button',
                                            'class' => ($key === 0) ? "tabs-list__el active" : "tabs-list__el",
                                            'data-tab' => '',
                                            'data-hash' => $item->code
                                        ]);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content-wrap">
                            <div class="tabs-content">
                                <?= (count($model->descriptions) > 0) ? $this->render("_description", [
                                    "configure" => false,
                                    "model" => $model->descriptions[0]
                                ]) : "" ?>

                                <?php
                                foreach ($model->child as $key => $item) {
                                    echo $this->render('_tab', [
                                        'isActive' => $key === 0,
                                        'model' => $item,
                                        'key' => $key
                                    ]);
                                }
                                if (isset($model->descriptions[1])) {
                                    echo $this->render("_description", [
                                        "configure" => false,
                                        "model" => $model->descriptions[1]
                                    ]);
                                }
                                ?>

                                <style>
                                    .wrapper .b-reviews {
                                        padding-top: 50px;
                                    }

                                    .tabs-content {
                                        padding-top: 5rem;
                                        padding-bottom: 4rem;
                                    }

                                    .tabs__head {
                                        margin-bottom: 2.7rem;
                                    }

                                    .block-slider__slide-content-wrap {
                                        width: 100%;
                                        min-height: unset;
                                        padding-top: 0;
                                    }

                                    .product-description__head .product-description__title {
                                        max-width: 31.25rem;
                                    }

                                    .product-description__title {
                                        flex: 1;
                                        max-width: 100%;
                                        width: 100%;
                                    }

                                    .block-slider__slide-content-text {
                                        max-width: 50%;
                                        width: 100%;
                                    }

                                    .b-reviews h4 {
                                        max-width: 31.25rem;
                                        width: 100%;
                                        font-size: 52.5px;
                                        line-height: 70px;
                                        color: #101010;
                                    }

                                    .b-reviews h5 {
                                        font-weight: normal;
                                        /*font-size: 21px;
                                        line-height: 31px;*/
                                        color: #101010;
                                    }

                                    .block-slider__slide-content-wrap {
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        justify-content: space-between;
                                    }

                                    .block-slider__slide-content-text .text p:not(:last-child) {
                                        margin-bottom: 20px;
                                    }

                                    @media (max-width: 1550px) {
                                        .product-description__title,
                                        .b-reviews h4 {
                                            font-size: 36px;
                                            line-height: 45px;
                                        }
                                    }

                                    @media (max-width: 1300px) {
                                        .product-description__title, .b-reviews h4 {
                                            font-size: 28px;
                                            line-height: 32px;
                                        }
                                    }

                                    @media (max-width: 700px) {
                                        .tabs-content {
                                            padding-top: 2.5rem;
                                            padding-bottom: 2.5rem;
                                        }

                                        .block-slider__slide-content-wrap {
                                            flex-direction: column;
                                        }

                                        .block-slider__slide-content-text {
                                            max-width: 100%;
                                            margin-top: 1rem;
                                        }
                                    }

                                    @media (max-width: 400px) {
                                        .product-description__title, .b-reviews h4 {
                                            font-size: 20px;
                                            line-height: 24px;
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if ($model->descriptions > 2) {
    for ($i = 2; $i < count($model->descriptions); $i++) {
        echo \yii\helpers\Html::beginTag("div", ["class" => "pb-2-fixed wrapper wrap-pl-1 wrap-pr-1 bg-white bg-wings"]);
        echo $this->render("_description", [
            "configure" => false,
            "model" => $model->descriptions[$i]
        ]);
        echo \yii\helpers\Html::endTag("div");
    }
}
?>
<?= $this->render("/layouts/_interest") ?>
