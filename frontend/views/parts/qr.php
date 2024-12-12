<?php

use yii\web\View;


/**
 * @var View $this
 */

$this->title = "Оформление заявки на ремонт";
?>
<script src="/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme("black");
    })
</script>
<style>
    .row {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .col--lg-4 {
        width: 45%;
    }
    .col--lg-8 {
        width: 100%;
    }
    .form-btn_t {
        margin-top: 20px;
    }
    .form-btn_gray {
        font-size: 16px;
        padding: 17px 24px;
        border: 2px solid #92969B;
        background: #EFEFF2;
        cursor: pointer;
        transition: all .3s ease;
    }
</style>
<div class="pt-md-160 pt-96 mb-lg-56 mb-md-48 mb-40 wrapper wrap-pl-1 wrap-pr-1">
    <div class="page-heading">
        <a href="/products/" class="text-lead page-heading__link mb-16" data-link-animate="">Главная</a>
        <h1 class="h2 page-heading__title">Оформление заявки на ремонт</h1>
    </div>
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
                                    <button class="tabs-list__fade tabs-list__fade--left js-tab-scroll" data-direction="left"></button>
                                    <button class="tabs-list__fade tabs-list__fade--right js-tab-scroll" data-direction="right"></button>
                                    <button type="button" class="tabs-list__el active" data-tab="" data-hash="models-zuk">
                                        Оформление
                                    </button>
                                    <button type="button" class="tabs-list__el" data-tab="" data-hash="adapters">
                                        Проверка
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content-wrap">
                            <div class="tabs-content">
                                <div class="tabs-content__el active" data-content="" data-hash="models-zuk" data-animate-repeat="">
                                    <?php
                                        $form = \yii\widgets\ActiveForm::begin([
                                            'options' => [
                                                'class' => 'form form_dark'
                                            ],
                                            'method' => 'post'
                                        ]);
                                    ?>
                                        <div class="row">
                                            <div class="col col--lg-4">
                                                <div class="control control_b-offset">
                                                    <div class="input-shell">
                                                        <input name="SERIAL_NUM" class="input input--default not-empty" placeholder="Серийный номер" type="text" required="" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col--lg-4">
                                                <div class="control control_b-offset">
                                                    <div class="input-shell">
                                                        <input name="PHONE" class="input input--default not-empty js-mask-tel" type="tel" placeholder="Телефон" value="" required="" data-initialized-mask="">
                                                    </div>
                                                    <div class="control-hint">Номер телефона вводится без кода страны</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col--lg-4">
                                                <div class="control control_b-offset">
                                                    <div class="input-shell">
                                                        <input name="FIO" class="input input--default" placeholder="ФИО" type="text" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col--lg-4">
                                                <div class="control control_b-offset">
                                                    <div class="input-shell">
                                                        <input name="EMAIL" class="input input--default" placeholder="E-mail" type="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col--lg-8 col--lg-sm-12">
                                                <div class="control control_b-offset">
                                                    <div class="input-shell">
                                                        <textarea name="DESCRIPTION" class="input input--default" placeholder="Описание проблемы" type="text" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn form-btn form-btn_gray form-btn_t">Отправить заявку</button>
                                    <?php
                                    \yii\widgets\ActiveForm::end();
                                    ?>
                                </div>
                                <div class="tabs-content__el" data-content="" data-hash="adapters" data-animate-repeat="">
                                    <?php
                                    $form = \yii\widgets\ActiveForm::begin([
                                        'options' => [
                                            'class' => 'form form_dark'
                                        ],
                                        'method' => 'post'
                                    ]);
                                    ?>
                                        <div class="row">
                                            <div class="col col--lg-4">
                                                <div class="control control_b-offset">
                                                    <div class="input-shell">
                                                        <input name="BID_NUM" class="input input--default" placeholder="Номер заявки" type="tel" value="" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn form-btn form-btn_gray form-btn_t">Проверить</button>
                                    <?php
                                    \yii\widgets\ActiveForm::end();
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>