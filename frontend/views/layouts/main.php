<?php

/**
 * @var $this \yii\web\View
 * @var $content string
 */

use common\models\Config;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

\frontend\assets\RtmAsset::register($this);
$this->beginPage();
\Yii::$app->session->open();
if ( !\Yii::$app->session->has('branch') ) {
    \Yii::$app->session->set('branch', 1);
    \Yii::$app->response->redirect(['/site/index']);
}
?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <meta property="og:title" content="Главная"/>
    <?php
        $logoWhite = Config::find()->where(['title' => 'logo_white'])->one();
        $logoRed = Config::find()->where(['title' => 'logo_red'])->one();
    ?>
    <meta property="og:image" content="https://oktober-rsm.ru<?= $logoWhite->value ?>"/>
    <meta property="og:image:secure_url" content="https://oktober-rsm.ru<?= $logoRed->value ?>"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="752"/>
    <meta property="og:image:height" content="395"/>
    <meta name="ahrefs-site-verification" content="b5053f3ed0723b575994c27e4a9a7be1a4787788d4648db11875a86401389033"/>

    <link rel="manifest" href="/dist/site.webmanifest"/>
    <link rel="mask-icon" href="/dist/safari-pinned-tab.svg" color="#5bbad5"/>
    <meta name="msapplication-TileColor" content="#ff941a"/>
    <meta name="msapplication-config" content="/dist/browserconfig.xml"/>
    <meta name="theme-color" content="#ffffff"/>
    <meta name="cmsmagazine" content="918c8f14e47036201c9ff316c734e22f"/>
    <link rel="canonical" href="index.htm"/>
    <link rel="icon" href="/favicon.ico" size="any">
    <link rel="icon" href="/favicon.ico" type="image/svg+xml">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description"
          content="ООО Агропромсервис - официальный дилер техники Ростсельмаш в Курской, Брянской и Орловской областях"/>
    <script>
        const scriptList = [
            "/js/script.js",
//            "/js/jquery-2.2.4.min.js", */
//            "/bitrix/js/main/core/core.min.js",
//            "/bitrix/js/pull/protobuf/protobuf.min.js",
//            "/bitrix/js/pull/protobuf/model.min.js",
//            "/bitrix/js/rest/client/rest.client.min.js",
//            "/bitrix/js/pull/client/pull.client.min.js",
//            "/bitrix/js/main/pageobject/pageobject.min.js",
//            '/bitrix/js/main/core/core_window.min.js',
            '/dist/prog/app.js',
            '/dist/js/stycky-kit.js',
/*            '/local/templates/.default/script.js',
            '/local/templates/.default/custom.js',
            '/local/templates/.default/components/uplab.production/form.univers/contact-us/script.js',
            '/local/templates/.default/components/uplab.production/form.univers/cooperation-with-us/script.js',
            '/local/templates/.default/components/wf/form.univers/form-subscribe/script.js',
            '/local/templates/.default/components/wf/form.univers/form-invite/script.js',
            '/local/components/uplab.production/region.selector/templates/default/script.js',
            '/local/components/bitrix/news.list/templates/dealers_where_card/script.js',
            '/dist/js/index.js',
            '/dist/js/script.js',
            '/dist/js/components.js',
            '/dist/js/vendors~index.chunk.js',
            '/dist/js/jquery.inputmask.js',
            '/dist/js/owl.carousel.js', */
        ];
        scriptList.forEach((item) => {
            const el = document.createElement('script');
            el.setAttribute('src', item);
            document.head.appendChild(el);
        })
        document.addEventListener("DOMContentLoaded", () => {
            document.body.classList.add('loaded');
        })
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
    <style>
        .rc-anchor {
            display: none !important;
        }
        .mfp-content {
            z-index: 1001;
        }
        .region-list {
            padding: 0;
            margin: 0;
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            font-size: 2rem;
        }
        .link-action {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            max-width: 100%;
            padding: 0;
            border: 0;
            border-radius: 0;
            text-decoration: none !important;
            background-color: rgba(0, 0, 0, 0);
            color: #101010;
        }
        .region-list .link-action__text {
            font-size: 2rem;
        }
        #modal-region .modal__content {
            width: 50vw;
            justify-content: start;
            padding: 4rem 0 3rem 9.875rem;
        }
        @media (min-width: 990px) {
            .filter .modal--filter .modal__content {
            padding-top: 3rem
            }
        }
        @media (min-width: 990px) {
            .modal--product .modal__content {
            padding-top: 4.5rem
            }
            .modal--product .modal__content .user-text {
            padding-top: 1rem
            }
        }
        @media (min-width: 640px) {
            .modal__content {
            padding: 4rem 2rem
            }
        }
        @media (min-width: 990px) {
            .modal__content {
            padding: 4rem 0 3rem 9.875rem
            }
        }
        /**/
        @media (max-width: 989.98px) {
            .mfp-wrap {
            overflow-y: auto
            }
            #modal-region .modal__content { width: 100vw; }
        }
        @media (max-width: 989.98px) and (orientation: landscape) {
            .is-safari .mfp-wrap {
            min-height: 100vh
            }
            #modal-region .modal__content { width: 100%; }
        }
    </style>
<body class="">
<?php $this->beginBody() ?>
<div class="progress-load"></div>

<div class="preloader">
    <?= $this->render('menu') ?>

    <?= $content ?>
</div>
<?= $this->render('footer') ?>

<?php
$this->endBody();
?>
<script>
    let product_id = undefined;
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('[href="/configurator"]').forEach(item => {
            item.style.display = 'none';
        })
        document.querySelectorAll('.form-layout__actions .form-layout__action .btn').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const form = e.target.closest('form');
                if ($(form).find('[name="application-form-privacy"]').is(":checked")) {
                    form.submit();
                }
            });
        })
        $('#write_us').parsley()
            .on('field:validate', function(e) {
                console.log(e);
            })
            .on('form:submit', function(e) {
                e.preventDefault();
                return false; // Don't submit form for this demo
            });
        $('a[href="#technic-invite"]').on('click', (event) => {
            let id = $(event.target).attr('data-key');
            $.ajax(`/products/ajax?id=` + id, {
                success: (response) => {
                    $('[name="PROP_PRODUCT_NAME"]').val(response.name)
                    $('[name="PROP_PRODUCT_ID"]').val(response.id)
                }
            });
        })
    })
</script>
<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-move-from-left mfp-ready" tabindex="-1"
     style="overflow: hidden auto; display: none;">
    <div class="mfp-container mfp-inline-holder">
        <div class="mfp-content">
            <div class="modal mfp-hide mfp-with-anim modal--application" id="leasing">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal__scroll-wrapper js-perfect-scrollbar ps">
                        <h3 class="modal__head h3">Подача заявки на кредит</h3>
                        <div class="modal__description text-default">Оставьте свои контакты и мы перезвоним с выгодным
                            предложением
                        </div>
                        <div class="modal__body">
                            <div class="modal__left">
                                <form name="application-form-modal" action="/finance/send-leasing" method="POST"
                                      class="form-layout js-validate" id="application-form-modal"
                                      data-parsley-validate="" novalidate="" data-parsley-initialized="">
                                    <div class="form-layout__items">
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="824568PROP_TYPE" name="PROP_TYPE"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Заявка на лизинг">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="824568FORM_NAME" name="FORM_NAME"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Лизинг">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--no-full-width ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="824568PROP_NAME" name="PROP_NAME"
                                                                   class="input input--default" placeholder="Имя"
                                                                   type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--tel form-layout__item--tel ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="824568PROP_PHONE" name="PROP_PHONE"
                                                                   class="input input--default"
                                                                   placeholder="+7 (___) ___ __ __" data-mask-tel=""
                                                                   data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                                                   type="tel" inputmode="tel" required=""
                                                                   data-parsley-trigger="change"
                                                                   data-initialized-mask="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select id="824568PROP_REGION"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_REGION" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required=""
                                                                data-select2-id="824568PROP_REGION" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
                                                            <option value="Новосибирская область">
                                                                Новосибирская область
                                                            </option>
                                                            <option value="Ярославская область">
                                                                Ярославская область
                                                            </option>
                                                            <option value="Костромская область">
                                                                Костромская область
                                                            </option>
                                                            <option value="Республика Хакасия">
                                                                Республика Хакасия
                                                            </option>
                                                            <option value="Иркутская область">
                                                                Иркутская область
                                                            </option>
                                                            <option value="Смоленская область">
                                                                Смоленская область
                                                            </option>
                                                            <option value="Московская область">
                                                                Московская область
                                                            </option>
                                                            <option value="Омская область">
                                                                Омская область
                                                            </option>
                                                            <option value="Брянская область">
                                                                Брянская область
                                                            </option>
                                                            <option value="Курская область">
                                                                Курская область
                                                            </option>
                                                            <option value="Республика Тыва">
                                                                Республика Тыва
                                                            </option>
                                                            <option value="Красноярский край">
                                                                Красноярский край
                                                            </option>
                                                            <option value="Тамбовская область" <?= (intval(\Yii::$app->session->get('branch')) === 1) ? 'selected' : '' ?>>
                                                                Тамбовская область
                                                            </option>
                                                            <option value="Белгородская область">
                                                                Белгородская область
                                                            </option>
                                                            <option value="Томская область">
                                                                Томская область
                                                            </option>
                                                            <option value="Воронежская область">
                                                                Воронежская область
                                                            </option>
                                                            <option value="Липецкая область"  <?= (intval(\Yii::$app->session->get('branch')) === 2) ? 'selected' : '' ?>>
                                                                Липецкая область
                                                            </option>
                                                            <option value="Республика Алтай">
                                                                Республика Алтай
                                                            </option>
                                                            <option value="Забайкальский край">
                                                                Забайкальский край
                                                            </option>
                                                            <option value="Тверская область">
                                                                Тверская область
                                                            </option>
                                                            <option value="Ивановская область">
                                                                Ивановская область
                                                            </option>
                                                            <option value="Алтайский край">
                                                                Алтайский край
                                                            </option>
                                                            <option value="Владимирская область">
                                                                Владимирская область
                                                            </option>
                                                            <option value="Орловская область">
                                                                Орловская область
                                                            </option>
                                                            <option value="Кемеровская область">
                                                                Кемеровская область
                                                            </option>
                                                            <option value="Тульская область">
                                                                Тульская область
                                                            </option>
                                                            <option value="Калужская область">
                                                                Калужская область
                                                            </option>
                                                            <option value="Республика Бурятия">
                                                                Республика Бурятия
                                                            </option>
                                                            <option value="Рязанская область">
                                                                Рязанская область
                                                            </option>
                                                            <option value="Ростовская область">
                                                                Ростовская область
                                                            </option>
                                                            <option value="Краснодарский край">
                                                                Краснодарский край
                                                            </option>
                                                            <option value="Тюменская область">
                                                                Тюменская область
                                                            </option>
                                                            <option value="Республика Башкортостан">
                                                                Республика Башкортостан
                                                            </option>
                                                            <option value="Свердловская область">
                                                                Свердловская область
                                                            </option>
                                                            <option value="Челябинская область">
                                                                Челябинская область
                                                            </option>
                                                            <option value="Оренбургская область">
                                                                Оренбургская область
                                                            </option>
                                                            <option value="Республика Удмуртия">
                                                                Республика Удмуртия
                                                            </option>
                                                            <option value="Курганская область">
                                                                Курганская область
                                                            </option>
                                                            <option value="Приморский край">
                                                                Приморский край
                                                            </option>
                                                            <option value="Амурская область">
                                                                Амурская область
                                                            </option>
                                                            <option value="Ставропольский край">
                                                                Ставропольский край
                                                            </option>
                                                            <option value="Самарская область">
                                                                Самарская область
                                                            </option>
                                                            <option value="Волгоградская область">
                                                                Волгоградская область
                                                            </option>
                                                            <option value="Пензенская область">
                                                                Пензенская область
                                                            </option>
                                                            <option value="Саратовская область">
                                                                Саратовская область
                                                            </option>
                                                            <option value="Республика Татарстан">
                                                                Республика Татарстан
                                                            </option>
                                                            <option value="Ленинградская Область">
                                                                Ленинградская Область
                                                            </option>
                                                            <option value="Пермский край">
                                                                Пермский край
                                                            </option>
                                                            <option value="Республика Крым">
                                                                Республика Крым
                                                            </option>
                                                            <option value="Минская область">
                                                                Минская область
                                                            </option>
                                                            <option value="Республика Мордовия">
                                                                Республика Мордовия
                                                            </option>
                                                            <option value="Хабаровский край">
                                                                Хабаровский край
                                                            </option>
                                                            <option value="Нижегородская область">
                                                                Нижегородская область
                                                            </option>
                                                            <option value="Чувашская Республика">
                                                                Чувашская Республика
                                                            </option>
                                                            <option value="Кировская область">
                                                                Кировская область
                                                            </option>
                                                            <option value="Республика Саха (Якутия)">
                                                                Республика Саха (Якутия)
                                                            </option>
                                                            <option value="Калининградская область">
                                                                Калининградская область
                                                            </option>
                                                            <option value="Еврейская автономная область">
                                                                Еврейская автономная область
                                                            </option>
                                                            <option value="Республика Дагестан">
                                                                Республика Дагестан
                                                            </option>
                                                            <option value="Ульяновская область">
                                                                Ульяновская область
                                                            </option>
                                                            <option value="Новгородская область">
                                                                Новгородская область
                                                            </option>
                                                            <option value="Вологодская область">
                                                                Вологодская область
                                                            </option>
                                                            <option value="Псковская Область">
                                                                Псковская Область
                                                            </option>
                                                            <option value="Республика Калмыкия">
                                                                Республика Калмыкия
                                                            </option>
                                                            <option value="Республика Чебоксары">
                                                                Республика Чебоксары
                                                            </option>
                                                            <option value="Москва">
                                                                Москва
                                                            </option>
                                                            <option value="Чеченская Республика">
                                                                Чеченская Республика
                                                            </option>
                                                            <option value="Мурманская область">
                                                                Мурманская область
                                                            </option>
                                                            <option value="Республика Адыгея">
                                                                Республика Адыгея
                                                            </option>
                                                            <option value="Республика Северная Осетия (Алания)">
                                                                Республика Северная Осетия (Алания)
                                                            </option>
                                                            <option value="Республика Ингушетия">
                                                                Республика Ингушетия
                                                            </option>
                                                            <option value="Кабардино-Балкарская Республика">
                                                                Кабардино-Балкарская Республика
                                                            </option>
                                                            <option value="Республика Карелия">
                                                                Республика Карелия
                                                            </option>
                                                            <option value="Карачаево-Черкесская Республика">
                                                                Карачаево-Черкесская Республика
                                                            </option>
                                                            <option value="Республика Марий Эл">
                                                                Республика Марий Эл
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select class="select select2-hidden-accessible"
                                                                name="PROP_BANK" data-select="Ростсельмаш Финанс"
                                                                data-select-theme="light"
                                                                data-select-placeholder="Выберите банк"
                                                                data-select-search="false" required=""
                                                                tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Выберите банк" data-select2-id="14"></option>
                                                            <option value="Ростсельмаш Финанс">
                                                                Ростсельмаш Финанс
                                                            </option>
                                                            <option value="АО Росагролизинг">
                                                                АО «Росагролизинг»
                                                            </option>
                                                            <option value="АО Сбербанк Лизинг">
                                                                АО «Сбербанк Лизинг»
                                                            </option>
                                                            <option value="ООО Интерлизинг">
                                                                ООО «Интерлизинг»
                                                            </option>
                                                            <option value="ООО Балтийский лизинг">
                                                                ООО «Балтийский лизинг»
                                                            </option>
                                                            <option value="ООО РБ Лизинг">
                                                                ООО «РБ Лизинг»
                                                            </option>
                                                            <option value="ООО Райффайзен-Лизинг">
                                                                ООО «Райффайзен-Лизинг»
                                                            </option>
                                                            <option value="ООО Каркаде">
                                                                ООО «Каркаде»
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="824568PROP_EMAIL" name="PROP_EMAIL"
                                                                   class="input input--default" placeholder="E-mail"
                                                                   type="email" data-parsley-type="email"
                                                                   inputmode="email" required=""
                                                                   data-parsley-trigger="change">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <textarea rows="1" class="textarea textarea--default"
                                                                      name="PROP_MESSAGE" id="824568PROP_MESSAGE"
                                                                      placeholder="Сообщение"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-layout__actions">
                                        <div class="form-layout__action">
                                            <button type="submit" class="btn btn--gray btn--hover-red">
                                                <span class="btn__text ">Отправить</span>
                                            </button>
                                        </div>
                                        <div class="form-layout__privacy">
                                            <div class="field theme-primary">
                                                <div class="control">
                                                    <label class="checkbox checkbox--primary ">
                                                        <input type="checkbox" class="checkbox__input"
                                                               name="application-form-privacy"
                                                               id="824568application-form-privacy" required=""
                                                               data-parsley-multiple="application-form-privacy">
                                                        <span class="checkbox__box"></span>
                                                        <span class="checkbox__inner">
                                                            <i class="icon is-small" aria-hidden="true">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="1" y="1" width="22" height="22" fill="#212121"
                                                                      stroke="#212121"
                                                                      stroke-width="2"></rect>
                                                                <path d="M5 12L9.66667 17L19 7" stroke="white"
                                                                      stroke-width="2"></path>
                                                                </svg>
                                                             </i>
                                                        </span>
                                                        <span class="checkbox__text">Нажимая «Отправить» , Вы соглашаетесь с <a
                                                                    href="/privacy-policy/" class="">Политикой конфиденциальности</a> и <a
                                                                    href="/terms-of-use/" class="">обработкой персональных данных</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-hide mfp-with-anim modal--application" id="lending">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal__scroll-wrapper js-perfect-scrollbar ps">
                        <h3 class="modal__head h3">Подача заявки на кредит</h3>
                        <div class="modal__description text-default">Оставьте свои контакты и мы перезвоним с выгодным
                            предложением
                        </div>
                        <div class="modal__body">
                            <div class="modal__left">
                                <form name="application-form-modal" action="/finance/send-leasing" method="POST"
                                      class="form-layout js-validate" id="application-form-modal"
                                      data-parsley-validate="" novalidate="" data-parsley-initialized="">
                                    <div class="form-layout__items">
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353EVENT_CREDIT_FORM" name="EVENT_CREDIT_FORM"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="CREDIT_FORM">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353PROP_TYPE" name="PROP_TYPE"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Заявка на кредит">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353PROP_CLIENT_REGION"
                                                                   name="PROP_CLIENT_REGION"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Ростовская область">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353FORM_IBLOCK" name="FORM_IBLOCK"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="137">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353FORM_NAME" name="FORM_NAME"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Кредитование">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--no-full-width ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353PROP_NAME" name="PROP_NAME"
                                                                   class="input input--default" placeholder="Имя"
                                                                   type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--tel form-layout__item--tel ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353PROP_PHONE" name="PROP_PHONE"
                                                                   class="input input--default"
                                                                   placeholder="+7 (___) ___ __ __" data-mask-tel=""
                                                                   data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                                                   type="tel" inputmode="tel" required=""
                                                                   data-parsley-trigger="change"
                                                                   data-initialized-mask="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select id="935353PROP_REGION"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_REGION" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required=""
                                                                data-select2-id="935353PROP_REGION" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
                                                            <option value="Новосибирская область">
                                                                Новосибирская область
                                                            </option>
                                                            <option value="Ярославская область">
                                                                Ярославская область
                                                            </option>
                                                            <option value="Костромская область">
                                                                Костромская область
                                                            </option>
                                                            <option value="Республика Хакасия">
                                                                Республика Хакасия
                                                            </option>
                                                            <option value="Иркутская область">
                                                                Иркутская область
                                                            </option>
                                                            <option value="Смоленская область">
                                                                Смоленская область
                                                            </option>
                                                            <option value="Московская область">
                                                                Московская область
                                                            </option>
                                                            <option value="Омская область">
                                                                Омская область
                                                            </option>
                                                            <option value="Брянская область">
                                                                Брянская область
                                                            </option>
                                                            <option value="Курская область">
                                                                Курская область
                                                            </option>
                                                            <option value="Республика Тыва">
                                                                Республика Тыва
                                                            </option>
                                                            <option value="Красноярский край">
                                                                Красноярский край
                                                            </option>
                                                            <option value="Тамбовская область" <?= (intval(\Yii::$app->session->get('branch')) === 1) ? 'selected' : '' ?>>
                                                                Тамбовская область
                                                            </option>
                                                            <option value="Белгородская область">
                                                                Белгородская область
                                                            </option>
                                                            <option value="Томская область">
                                                                Томская область
                                                            </option>
                                                            <option value="Воронежская область">
                                                                Воронежская область
                                                            </option>
                                                            <option value="Липецкая область" <?= (intval(\Yii::$app->session->get('branch')) === 2) ? 'selected' : '' ?>>
                                                                Липецкая область
                                                            </option>
                                                            <option value="Республика Алтай">
                                                                Республика Алтай
                                                            </option>
                                                            <option value="Забайкальский край">
                                                                Забайкальский край
                                                            </option>
                                                            <option value="Тверская область">
                                                                Тверская область
                                                            </option>
                                                            <option value="Ивановская область">
                                                                Ивановская область
                                                            </option>
                                                            <option value="Алтайский край">
                                                                Алтайский край
                                                            </option>
                                                            <option value="Владимирская область">
                                                                Владимирская область
                                                            </option>
                                                            <option value="Орловская область">
                                                                Орловская область
                                                            </option>
                                                            <option value="Кемеровская область">
                                                                Кемеровская область
                                                            </option>
                                                            <option value="Тульская область">
                                                                Тульская область
                                                            </option>
                                                            <option value="Калужская область">
                                                                Калужская область
                                                            </option>
                                                            <option value="Республика Бурятия">
                                                                Республика Бурятия
                                                            </option>
                                                            <option value="Рязанская область">
                                                                Рязанская область
                                                            </option>
                                                            <option value="Ростовская область">
                                                                Ростовская область
                                                            </option>
                                                            <option value="Краснодарский край">
                                                                Краснодарский край
                                                            </option>
                                                            <option value="Тюменская область">
                                                                Тюменская область
                                                            </option>
                                                            <option value="Республика Башкортостан">
                                                                Республика Башкортостан
                                                            </option>
                                                            <option value="Свердловская область">
                                                                Свердловская область
                                                            </option>
                                                            <option value="Челябинская область">
                                                                Челябинская область
                                                            </option>
                                                            <option value="Оренбургская область">
                                                                Оренбургская область
                                                            </option>
                                                            <option value="Республика Удмуртия">
                                                                Республика Удмуртия
                                                            </option>
                                                            <option value="Курганская область">
                                                                Курганская область
                                                            </option>
                                                            <option value="Приморский край">
                                                                Приморский край
                                                            </option>
                                                            <option value="Амурская область">
                                                                Амурская область
                                                            </option>
                                                            <option value="Ставропольский край">
                                                                Ставропольский край
                                                            </option>
                                                            <option value="Самарская область">
                                                                Самарская область
                                                            </option>
                                                            <option value="Волгоградская область">
                                                                Волгоградская область
                                                            </option>
                                                            <option value="Пензенская область">
                                                                Пензенская область
                                                            </option>
                                                            <option value="Саратовская область">
                                                                Саратовская область
                                                            </option>
                                                            <option value="Республика Татарстан">
                                                                Республика Татарстан
                                                            </option>
                                                            <option value="Ленинградская Область">
                                                                Ленинградская Область
                                                            </option>
                                                            <option value="Пермский край">
                                                                Пермский край
                                                            </option>
                                                            <option value="Республика Крым">
                                                                Республика Крым
                                                            </option>
                                                            <option value="Минская область">
                                                                Минская область
                                                            </option>
                                                            <option value="Республика Мордовия">
                                                                Республика Мордовия
                                                            </option>
                                                            <option value="Хабаровский край">
                                                                Хабаровский край
                                                            </option>
                                                            <option value="Нижегородская область">
                                                                Нижегородская область
                                                            </option>
                                                            <option value="Чувашская Республика">
                                                                Чувашская Республика
                                                            </option>
                                                            <option value="Кировская область">
                                                                Кировская область
                                                            </option>
                                                            <option value="Республика Саха (Якутия)">
                                                                Республика Саха (Якутия)
                                                            </option>
                                                            <option value="Калининградская область">
                                                                Калининградская область
                                                            </option>
                                                            <option value="Еврейская автономная область">
                                                                Еврейская автономная область
                                                            </option>
                                                            <option value="Республика Дагестан">
                                                                Республика Дагестан
                                                            </option>
                                                            <option value="Ульяновская область">
                                                                Ульяновская область
                                                            </option>
                                                            <option value="Новгородская область">
                                                                Новгородская область
                                                            </option>
                                                            <option value="Вологодская область">
                                                                Вологодская область
                                                            </option>
                                                            <option value="Псковская Область">
                                                                Псковская Область
                                                            </option>
                                                            <option value="Республика Калмыкия">
                                                                Республика Калмыкия
                                                            </option>
                                                            <option value="Республика Чебоксары">
                                                                Республика Чебоксары
                                                            </option>
                                                            <option value="Москва">
                                                                Москва
                                                            </option>
                                                            <option value="Чеченская Республика">
                                                                Чеченская Республика
                                                            </option>
                                                            <option value="Мурманская область">
                                                                Мурманская область
                                                            </option>
                                                            <option value="Республика Адыгея">
                                                                Республика Адыгея
                                                            </option>
                                                            <option value="Республика Северная Осетия (Алания)">
                                                                Республика Северная Осетия (Алания)
                                                            </option>
                                                            <option value="Республика Ингушетия">
                                                                Республика Ингушетия
                                                            </option>
                                                            <option value="Кабардино-Балкарская Республика">
                                                                Кабардино-Балкарская Республика
                                                            </option>
                                                            <option value="Республика Карелия">
                                                                Республика Карелия
                                                            </option>
                                                            <option value="Карачаево-Черкесская Республика">
                                                                Карачаево-Черкесская Республика
                                                            </option>
                                                            <option value="Республика Марий Эл">
                                                                Республика Марий Эл
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select id="935353PROP_BANK"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_BANK" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Выберите банк"
                                                                data-select-search="true" required=""
                                                                data-select2-id="935353PROP_BANK" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Выберите банк" data-select2-id="10"></option>
                                                            <option value="ПАО Сбербанк России">
                                                                ПАО Сбербанк России
                                                            </option>
                                                            <option value="АО «Российский Сельскохозяйственный банк»">
                                                                АО «Российский Сельскохозяйственный банк»
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="935353PROP_EMAIL" name="PROP_EMAIL"
                                                                   class="input input--default" placeholder="E-mail"
                                                                   type="email" data-parsley-type="email"
                                                                   inputmode="email" required=""
                                                                   data-parsley-trigger="change">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <textarea rows="1" class="textarea textarea--default"
                                                                      name="PROP_MESSAGE" id="935353PROP_MESSAGE"
                                                                      placeholder="Сообщение"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-layout__actions">
                                        <div class="form-layout__action">
                                            <button type="submit" class="btn btn--gray btn--hover-red			">
                                                <span class="btn__text ">Отправить</span>
                                            </button>
                                        </div>
                                        <div class="form-layout__privacy">
                                            <div class="field theme-primary">
                                                <div class="control">
                                                    <label class="checkbox checkbox--primary ">
                                                        <input type="checkbox" class="checkbox__input"
                                                               name="application-form-privacy"
                                                               id="935353application-form-privacy" required=""
                                                               data-parsley-multiple="application-form-privacy">
                                                        <span class="checkbox__box"></span>
                                                        <span class="checkbox__inner">
									 <i class="icon is-small" aria-hidden="true">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
										   <rect x="1" y="1" width="22" height="22" fill="#212121" stroke="#212121"
                                                 stroke-width="2"></rect>
										   <path d="M5 12L9.66667 17L19 7" stroke="white" stroke-width="2"></path>
										</svg>
									 </i>
								  </span>
                                                        <span class="checkbox__text">Нажимая «Отправить» , Вы соглашаетесь с <a
                                                                    href="/privacy-policy/" class="">Политикой конфиденциальности</a> и <a
                                                                    href="/terms-of-use/" class="">обработкой персональных данных</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-hide mfp-with-anim modal--application" id="insurance">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal__scroll-wrapper js-perfect-scrollbar ps">
                        <h3 class="modal__head h3">Подать заявку на страхование</h3>
                        <div class="modal__description text-default">Оставьте свои контакты и мы перезвоним с выгодным
                            предложением
                        </div>
                        <div class="modal__body">
                            <div class="modal__left">
                                <form name="insurance" action="/finance/send-leasing" method="POST" class="form-layout js-validate"
                                      data-modalform="Y" id="form_insurance" data-parsley-validate="" novalidate=""
                                      data-parsley-initialized="">
                                    <div class="form-layout__items">
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456EVENT_CREDIT_FORM" name="EVENT_CREDIT_FORM"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="CREDIT_FORM">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456PROP_TYPE" name="PROP_TYPE"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Заявка на страхование">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456PROP_CLIENT_REGION"
                                                                   name="PROP_CLIENT_REGION"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Республика Бурятия">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456FORM_IBLOCK" name="FORM_IBLOCK"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="137">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456FORM_NAME" name="FORM_NAME"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Страхование">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--no-full-width ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456PROP_NAME" name="PROP_NAME"
                                                                   class="input input--default" placeholder="Имя"
                                                                   type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--tel form-layout__item--tel ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456PROP_PHONE" name="PROP_PHONE"
                                                                   class="input input--default"
                                                                   placeholder="+7 (___) ___ __ __" data-mask-tel=""
                                                                   data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                                                   type="tel" inputmode="tel" required=""
                                                                   data-parsley-trigger="change"
                                                                   data-initialized-mask="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select id="722456PROP_REGION"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_REGION" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required=""
                                                                data-select2-id="722456PROP_REGION" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
                                                            <option value="Новосибирская область">
                                                                Новосибирская область
                                                            </option>
                                                            <option value="Ярославская область">
                                                                Ярославская область
                                                            </option>
                                                            <option value="Костромская область">
                                                                Костромская область
                                                            </option>
                                                            <option value="Республика Хакасия">
                                                                Республика Хакасия
                                                            </option>
                                                            <option value="Иркутская область">
                                                                Иркутская область
                                                            </option>
                                                            <option value="Смоленская область">
                                                                Смоленская область
                                                            </option>
                                                            <option value="Московская область">
                                                                Московская область
                                                            </option>
                                                            <option value="Омская область">
                                                                Омская область
                                                            </option>
                                                            <option value="Брянская область">
                                                                Брянская область
                                                            </option>
                                                            <option value="Курская область">
                                                                Курская область
                                                            </option>
                                                            <option value="Республика Тыва">
                                                                Республика Тыва
                                                            </option>
                                                            <option value="Красноярский край">
                                                                Красноярский край
                                                            </option>
                                                            <option value="Тамбовская область">
                                                                Тамбовская область
                                                            </option>
                                                            <option value="Белгородская область">
                                                                Белгородская область
                                                            </option>
                                                            <option value="Томская область" <?= (intval(\Yii::$app->session->get('branch')) === 1) ? 'selected' : '' ?>>
                                                                Томская область
                                                            </option>
                                                            <option value="Воронежская область">
                                                                Воронежская область
                                                            </option>
                                                            <option value="Липецкая область" <?= (intval(\Yii::$app->session->get('branch')) === 2) ? 'selected' : '' ?>>
                                                                Липецкая область
                                                            </option>
                                                            <option value="Республика Алтай">
                                                                Республика Алтай
                                                            </option>
                                                            <option value="Забайкальский край">
                                                                Забайкальский край
                                                            </option>
                                                            <option value="Тверская область">
                                                                Тверская область
                                                            </option>
                                                            <option value="Ивановская область">
                                                                Ивановская область
                                                            </option>
                                                            <option value="Алтайский край">
                                                                Алтайский край
                                                            </option>
                                                            <option value="Владимирская область">
                                                                Владимирская область
                                                            </option>
                                                            <option value="Орловская область">
                                                                Орловская область
                                                            </option>
                                                            <option value="Кемеровская область">
                                                                Кемеровская область
                                                            </option>
                                                            <option value="Тульская область">
                                                                Тульская область
                                                            </option>
                                                            <option value="Калужская область">
                                                                Калужская область
                                                            </option>
                                                            <option value="Республика Бурятия">
                                                                Республика Бурятия
                                                            </option>
                                                            <option value="Рязанская область">
                                                                Рязанская область
                                                            </option>
                                                            <option value="Ростовская область">
                                                                Ростовская область
                                                            </option>
                                                            <option value="Краснодарский край">
                                                                Краснодарский край
                                                            </option>
                                                            <option value="Тюменская область">
                                                                Тюменская область
                                                            </option>
                                                            <option value="Республика Башкортостан">
                                                                Республика Башкортостан
                                                            </option>
                                                            <option value="Свердловская область">
                                                                Свердловская область
                                                            </option>
                                                            <option value="Челябинская область">
                                                                Челябинская область
                                                            </option>
                                                            <option value="Оренбургская область">
                                                                Оренбургская область
                                                            </option>
                                                            <option value="Республика Удмуртия">
                                                                Республика Удмуртия
                                                            </option>
                                                            <option value="Курганская область">
                                                                Курганская область
                                                            </option>
                                                            <option value="Приморский край">
                                                                Приморский край
                                                            </option>
                                                            <option value="Амурская область">
                                                                Амурская область
                                                            </option>
                                                            <option value="Ставропольский край">
                                                                Ставропольский край
                                                            </option>
                                                            <option value="Самарская область">
                                                                Самарская область
                                                            </option>
                                                            <option value="Волгоградская область">
                                                                Волгоградская область
                                                            </option>
                                                            <option value="Пензенская область">
                                                                Пензенская область
                                                            </option>
                                                            <option value="Саратовская область">
                                                                Саратовская область
                                                            </option>
                                                            <option value="Республика Татарстан">
                                                                Республика Татарстан
                                                            </option>
                                                            <option value="Ленинградская Область">
                                                                Ленинградская Область
                                                            </option>
                                                            <option value="Пермский край">
                                                                Пермский край
                                                            </option>
                                                            <option value="Республика Крым">
                                                                Республика Крым
                                                            </option>
                                                            <option value="Минская область">
                                                                Минская область
                                                            </option>
                                                            <option value="Республика Мордовия">
                                                                Республика Мордовия
                                                            </option>
                                                            <option value="Хабаровский край">
                                                                Хабаровский край
                                                            </option>
                                                            <option value="Нижегородская область">
                                                                Нижегородская область
                                                            </option>
                                                            <option value="Чувашская Республика">
                                                                Чувашская Республика
                                                            </option>
                                                            <option value="Кировская область">
                                                                Кировская область
                                                            </option>
                                                            <option value="Республика Саха (Якутия)">
                                                                Республика Саха (Якутия)
                                                            </option>
                                                            <option value="Калининградская область">
                                                                Калининградская область
                                                            </option>
                                                            <option value="Еврейская автономная область">
                                                                Еврейская автономная область
                                                            </option>
                                                            <option value="Республика Дагестан">
                                                                Республика Дагестан
                                                            </option>
                                                            <option value="Ульяновская область">
                                                                Ульяновская область
                                                            </option>
                                                            <option value="Новгородская область">
                                                                Новгородская область
                                                            </option>
                                                            <option value="Вологодская область">
                                                                Вологодская область
                                                            </option>
                                                            <option value="Псковская Область">
                                                                Псковская Область
                                                            </option>
                                                            <option value="Республика Калмыкия">
                                                                Республика Калмыкия
                                                            </option>
                                                            <option value="Республика Чебоксары">
                                                                Республика Чебоксары
                                                            </option>
                                                            <option value="Москва">
                                                                Москва
                                                            </option>
                                                            <option value="Чеченская Республика">
                                                                Чеченская Республика
                                                            </option>
                                                            <option value="Мурманская область">
                                                                Мурманская область
                                                            </option>
                                                            <option value="Республика Адыгея">
                                                                Республика Адыгея
                                                            </option>
                                                            <option value="Республика Северная Осетия (Алания)">
                                                                Республика Северная Осетия (Алания)
                                                            </option>
                                                            <option value="Республика Ингушетия">
                                                                Республика Ингушетия
                                                            </option>
                                                            <option value="Кабардино-Балкарская Республика">
                                                                Кабардино-Балкарская Республика
                                                            </option>
                                                            <option value="Республика Карелия">
                                                                Республика Карелия
                                                            </option>
                                                            <option value="Карачаево-Черкесская Республика">
                                                                Карачаево-Черкесская Республика
                                                            </option>
                                                            <option value="Республика Марий Эл">
                                                                Республика Марий Эл
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select id="722456PROP_BANK"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_BANK" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Выберите банк"
                                                                data-select-search="true" required=""
                                                                data-select2-id="722456PROP_BANK" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Выберите банк" data-select2-id="18"></option>
                                                            <option value="ООО «АльфаСтрахование»">
                                                                ООО «АльфаСтрахование»
                                                            </option>
                                                            <option value="АО СК «РСХБ-Страхование»">
                                                                АО СК «РСХБ-Страхование»
                                                            </option>
                                                            <option value="Страховой Дом ВСК (САО «ВСК»)">
                                                                Страховой Дом ВСК (САО «ВСК»)
                                                            </option>
                                                            <option value="ПАО СК «Росгосстрах»">
                                                                ПАО СК «Росгосстрах»
                                                            </option>
                                                            <option value="ООО «Зетта Страхование»">
                                                                ООО «Зетта Страхование»
                                                            </option>
                                                            <option value="ООО «Абсолют Страхование»">
                                                                ООО «Абсолют Страхование»
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="722456PROP_EMAIL" name="PROP_EMAIL"
                                                                   class="input input--default" placeholder="E-mail"
                                                                   type="email" data-parsley-type="email"
                                                                   inputmode="email" required=""
                                                                   data-parsley-trigger="change">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--small ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <textarea rows="1" class="textarea textarea--default"
                                                                      name="PROP_MESSAGE" id="722456PROP_MESSAGE"
                                                                      placeholder="Сообщение"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-layout__actions">
                                        <div class="form-layout__action">
                                            <button type="submit" class="btn btn--gray btn--hover-red			">
                                                <span class="btn__text ">Отправить</span>
                                            </button>
                                        </div>
                                        <div class="form-layout__privacy">
                                            <div class="field theme-primary">
                                                <div class="control">
                                                    <label class="checkbox checkbox--primary ">
                                                        <input type="checkbox" class="checkbox__input"
                                                               name="application-form-privacy"
                                                               id="722456application-form-privacy" required=""
                                                               data-parsley-multiple="application-form-privacy">
                                                        <span class="checkbox__box"></span>
                                                        <span class="checkbox__inner">
									 <i class="icon is-small" aria-hidden="true">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
										   <rect x="1" y="1" width="22" height="22" fill="#212121" stroke="#212121"
                                                 stroke-width="2"></rect>
										   <path d="M5 12L9.66667 17L19 7" stroke="white" stroke-width="2"></path>
										</svg>
									 </i>
								  </span>
                                                        <span class="checkbox__text">Нажимая «Отправить» , Вы соглашаетесь с <a
                                                                    href="/privacy-policy/" class="">Политикой конфиденциальности</a> и <a
                                                                    href="/terms-of-use/" class="">обработкой персональных данных</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-hide mfp-with-anim modal--location" id="modal-form-location">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal__scroll-location js-perfect-scrollbar-md js-perfect-scrollbar-xs">
                        <div class="modal__body">
                            <div class="modal__left">
                                <div class="modal__left-heading h4">Ваше местоположение</div>
                                <form name="region-form" action="#" method="POST" class="form-layout js-validate"
                                      id="region-form" data-parsley-validate="">
                                    <div class="form-layout__items">
                                        <div class="form-layout__item form-layout__item--no-full-width">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <i class="icon is-small" aria-hidden="true">
                                                                <svg width="24" height="24" viewbox="0 0 24 24"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     stroke="currentColor">
                                                                    <circle cx="11" cy="11" r="8"
                                                                            stroke-width="2"></circle>
                                                                    <path d="M16.5 16L21.5 21" stroke-width="2"></path>
                                                                </svg>
                                                            </i>
                                                            <input
                                                                    id="region-form-1"
                                                                    name="region"
                                                                    class="input input--default"
                                                                    placeholder="Введите регион или страну"
                                                                    type="text"
                                                                    autocomplete="off"
                                                                    data-search-field="/local/components/uplab.production/region.selector/ajax-location.php"
                                                            />
                                                            <button type="button" class="link-action hidden"
                                                                    data-input-clear="">
                                                                <i class="icon is-small link-action__icon"
                                                                   aria-hidden="true">
                                                                    <svg width="24" height="24" viewbox="0 0 24 24"
                                                                         fill="none" stroke="currentColor"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 18L18.7279 5.27211"
                                                                              stroke-width="2"></path>
                                                                        <path d="M6 5L18.7279 17.7279"
                                                                              stroke-width="2"></path>
                                                                    </svg>
                                                                </i>
                                                            </button>
                                                            <div class="input__search-results" data-search-result="">
                                                                <div class="search-location-results"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-layout__item form-layout__item--link">
                                            <button type="button" class="link-action"
                                                    onclick="getUserLocation(this);return false;">
                                                <i class="icon is-small link-action__icon" aria-hidden="true">
                                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                                d="M12 20.9999C7 20.9999 3 16.9999 3 11.9999C3 6.99991 7 2.99991 12 2.99991C17 2.99991 21 6.99991 21 11.9999C21 16.9999 17 20.9999 12 20.9999ZM12 4.99991C8.1 4.99991 5 8.09991 5 11.9999C5 15.8999 8.1 18.9999 12 18.9999C15.9 18.9999 19 15.8999 19 11.9999C19 8.09991 15.9 4.99991 12 4.99991Z"
                                                        ></path>
                                                        <path d="M20 12H15" stroke="currentColor"
                                                              stroke-width="2"></path>
                                                        <path d="M12 4L12 9" stroke="currentColor"
                                                              stroke-width="2"></path>
                                                        <path d="M12 14.9998L12 20.9998" stroke="currentColor"
                                                              stroke-width="2"></path>
                                                        <path d="M9 12H4" stroke="currentColor" stroke-width="2"></path>
                                                    </svg>
                                                </i>
                                                <span class="link-action__text">Моё местоположение</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal__country-list">
                                    <div class="country-list">
                                        <div class="country-list__head text-lead">Введите регион или страну</div>
                                        <div class="country-list__groups js-perfect-scrollbar-lg">
                                            <div class="country-list__group">
                                                <div class="country-list__group-label text-label">Америка</div>
                                                <div class="country-list__items">
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1625','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/fa6/fa610ee2db7bafa8773e677b1fe8833c.png"
                                                                    alt="Канада"
                                                            />
                                                            Канада
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="country-list__group">
                                                <div class="country-list__group-label text-label">Африка</div>
                                                <div class="country-list__items">
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1626','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/a63/a6391f6f746b74cb5d7151c4a57aa7c4.png"
                                                                    alt="Южно-Африканская Республика"
                                                            />
                                                            Южно-Африканская Республика
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1627','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/b49/b49279a8bef7aeb459ccbd6011cd923a.png"
                                                                    alt="Алжир"
                                                            />
                                                            Алжир
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1628','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/8c9/8c927636eb146db33342d7a664dba35d.png"
                                                                    alt="Судан"
                                                            />
                                                            Судан
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2480','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/e94/e940c906eeb0b8929c3aa4672072f320.png"
                                                                    alt="Ангола"
                                                            />
                                                            Ангола
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://en.rostselmash.com', '6842','https://en.rostselmash.com');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/576/o38da8a8h2ql77isjj924c0jnylvb4a9.png"
                                                                    alt="Египет"
                                                            />
                                                            Египет
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '7472','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/cf1/1qlpwngysvod9koyv1w58yjvafdaxtyq.png"
                                                                    alt="Эфиопия"
                                                            />
                                                            Эфиопия
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="country-list__group">
                                                <div class="country-list__group-label text-label">Азия</div>
                                                <div class="country-list__items">
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1629','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/539/5394d1e3c053e50d5ceee010fc1fe389.png"
                                                                    alt="Армения"
                                                            />
                                                            Армения
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1630','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/535/5350ec0e7ef5981431d76e222319615e.png"
                                                                    alt="Киргизия"
                                                            />
                                                            Киргизия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1631','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/3c1/3c124a6ffd4969a08c49b9f657f624cc.png"
                                                                    alt="Китай"
                                                            />
                                                            Китай
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1632','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/89b/89b74041a6895ab0bf999cb85c9ebfda.png"
                                                                    alt="Монголия"
                                                            />
                                                            Монголия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1633','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/750/750e51f795221701b65f5a4ebb4f5a7a.png"
                                                                    alt="Узбекистан"
                                                            />
                                                            Узбекистан
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1634','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/7fc/7fc78c9f1c225e5fad8ab6367aa27d48.png"
                                                                    alt="Сирия"
                                                            />
                                                            Сирия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://kz.rostselmash.com/', '1635','https://kz.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/4bc/4bc9d479b03432fb491c46bd1b99d9eb.png"
                                                                    alt="Казахстан"
                                                            />
                                                            Казахстан
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '2313','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/ef6/ef61244dcb8de5849185a1b22841cf34.png"
                                                                    alt="Таджикистан"
                                                            />
                                                            Таджикистан
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2317','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/322/3223acd211a2fd29719163b506704b00.png"
                                                                    alt="Иран"
                                                            />
                                                            Иран
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2442','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/c25/c259603c0ba8f47db79c36327c7fd55c.png"
                                                                    alt="Туркменистан"
                                                            />
                                                            Туркменистан
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="country-list__group">
                                                <div class="country-list__group-label text-label">Австралия</div>
                                                <div class="country-list__items">
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1636','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/e2d/e2de81009e37d0e85466812cf58ce77a.png"
                                                                    alt="Австралия"
                                                            />
                                                            Австралия
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="country-list__group">
                                                <div class="country-list__group-label text-label">Европа</div>
                                                <div class="country-list__items">
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1578','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/dde/dde0e5ca6c6e5d3b75095dd0f5c6c97a.png"
                                                                    alt="Россия"
                                                            />
                                                            Россия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://de.rostselmash.com/', '1580','https://de.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/bb5/bb5efe64ae54f998d3ac6bffc1aa01fa.png"
                                                                    alt="Германия"
                                                            />
                                                            Германия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1637','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/075/0755e61d11ffd1430fea3ef0b7da1688.png"
                                                                    alt="Беларусь"
                                                            />
                                                            Беларусь
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1638','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/e03/e03ecd372124147e9f04a7b7f6bce81c.png"
                                                                    alt="Болгария"
                                                            />
                                                            Болгария
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://en.rostselmash.com', '1639','https://en.rostselmash.com');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/4aa/4aab206f9ed78e25e0a0b92d1b0106dc.png"
                                                                    alt="Великобритания"
                                                            />
                                                            Великобритания
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1640','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/4cc/4ccd0628b3a190bcc935dd5ca4b79391.png"
                                                                    alt="Венгрия"
                                                            />
                                                            Венгрия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1641','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/92e/92e9e4b5a02e246508f4aa7b992c844c.png"
                                                                    alt="Латвия"
                                                            />
                                                            Латвия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1642','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/532/532cf16ccd5bfe2a104bac2de3aa028d.png"
                                                                    alt="Литва"
                                                            />
                                                            Литва
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://md.rostselmash.com/', '1643','https://md.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/4ad/4ad370c4f430a901b514c0026ede4186.png"
                                                                    alt="Молдова"
                                                            />
                                                            Молдова
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1644','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/950/9505123138c35c55e116a1d9e5d09d3b.png"
                                                                    alt="Польша"
                                                            />
                                                            Польша
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '1645','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/e7a/e7a31abb4f59c950a0559e08d99b4866.png"
                                                                    alt="Румыния"
                                                            />
                                                            Румыния
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1646','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/fb0/fb04d01b7bde0bc12035f40d157937e3.png"
                                                                    alt="Сербия"
                                                            />
                                                            Сербия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1647','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/788/788cf38b9ba8f023e563a0c50e13e3c5.png"
                                                                    alt="Эстония"
                                                            />
                                                            Эстония
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '1838','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/572/5729e12989cae773beb24a9af04b35db.png"
                                                                    alt="Франция"
                                                            />
                                                            Франция
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '2311','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/d23/d23fb6b4ac77ec3a29757adba93c46bb.png"
                                                                    alt="Украина"
                                                            />
                                                            Украина
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2341','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/9a7/9a756778a7b2e67bddfd78678e79e8be.png"
                                                                    alt="Словакия"
                                                            />
                                                            Словакия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('https://rostselmash.com/', '2352','https://rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/a2e/a2eae2520413cc03aac8f266214b4e8b.png"
                                                                    alt="Грузия"
                                                            />
                                                            Грузия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2440','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/b49/b4970f36a10d96a3dfdd6936fbfb5b32.png"
                                                                    alt="Хорватия"
                                                            />
                                                            Хорватия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2543','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/31a/31a35b7868b2587bcfbbc76df11a30e2.png"
                                                                    alt="Турция"
                                                            />
                                                            Турция
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '2547','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/520/520cfdffb1f5cd89a6fe4ea26b9cd31d.png"
                                                                    alt="Чехия"
                                                            />
                                                            Чехия
                                                        </button>
                                                    </div>
                                                    <div class="country-list__item">
                                                        <button type="button" class="country-list__button"
                                                                onclick="selectLangAndCountry('http://en.rostselmash.com/', '6746','http://en.rostselmash.com/');">
                                                            <img
                                                                    class="image is-lazy is-cover"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                    data-src="/upload/iblock/4c7/k1ftisll7zlsi00y10uj8thw070i1smo.png"
                                                                    alt="Финляндия"
                                                            />
                                                            Финляндия
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-with-anim modal--feedback" id="modal-form-1">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">

                    <div class="modal__scroll-wrapper js-perfect-scrollbar ps">

                        <h3 class="modal__head h3">Связаться с технической поддержкой</h3>
                        <div class="modal__body">
                            <div class="modal__left">
                                <form name="technical-support-form" action="#" method="POST"
                                      class="form-layout js-validate" id="technical-support-form"
                                      data-parsley-validate="" novalidate="" data-parsley-initialized="">
                                    <div class="form-layout__items">


                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="2456246EVENT_TECHNIC_SUPPORT"
                                                                   name="EVENT_TECHNIC_SUPPORT"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="TECHNIC_SUPPORT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-layout__item hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="2456246PROP_CLIENT_REGION"
                                                                   name="PROP_CLIENT_REGION"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="Иркутская область">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-layout__item form-layout__item--no-full-width hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="2456246FORM_IBLOCK" name="FORM_IBLOCK"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="34">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-layout__item form-layout__item--no-full-width ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="2456246PROP_NAME" name="PROP_NAME"
                                                                   class="input input--default" placeholder="Имя"
                                                                   type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-layout__item form-layout__item--tel form-layout__item--tel ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="2456246PROP_PHONE" name="PROP_PHONE"
                                                                   class="input input--default"
                                                                   placeholder="+7 (___) ___ __ __" data-mask-tel=""
                                                                   data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                                                   type="tel" inputmode="tel" required=""
                                                                   data-parsley-trigger="change"
                                                                   data-initialized-mask="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-layout__item ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input id="2456246PROP_QUESTION" name="PROP_QUESTION"
                                                                   class="input input--default"
                                                                   placeholder="Описание проблемы" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-layout__actions">
                                        <div class="form-layout__action">
                                            <button type="submit" class="btn btn--gray btn--hover-red			">
                                                <span class="btn__text ">Отправить</span>
                                            </button>
                                        </div>
                                        <div class="form-layout__privacy">
                                            <div class="field theme-primary">
                                                <div class="control">
                                                    <label class="checkbox checkbox--primary ">
                                                        <input type="checkbox" class="checkbox__input"
                                                               name="application-form-privacy"
                                                               id="2456246application-form-privacy" required=""
                                                               data-parsley-multiple="application-form-privacy">

                                                        <span class="checkbox__box"></span>

                                                        <span class="checkbox__inner">
                                                            <i class="icon is-small" aria-hidden="true">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="1" y="1" width="22" height="22" fill="#212121" stroke="#212121" stroke-width="2"></rect>
                                                                    <path d="M5 12L9.66667 17L19 7" stroke="white" stroke-width="2"></path>
                                                                </svg>
                                                            </i>
                                                        </span>
                                                        <span class="checkbox__text">Нажимая «Отправить» , Вы соглашаетесь с <a
                                                                    href="/privacy-policy/" class="">Политикой конфиденциальности</a> и <a
                                                                    href="/terms-of-use/" class="">обработкой персональных данных</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-with-anim modal--feedback" id="write_us">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal__scroll-wrapper js-perfect-scrollbar ps">
                        <h3 class="modal__head h3">Связаться с нами</h3>
                        <div class="modal__description text-default">Оставьте свои контакты и мы перезвоним вам в
                            ближайшее время
                        </div>
                        <div class="modal__body">
                            <div class="modal__left">
                                <?php
                                    $model = new \frontend\models\ContactForm();
                                    $template = '<div class="field"><div class="control"><div class="input-shell">{input}<ul class="parsley-errors-list" aria-hidden="true"><li class="parsley-required">{error}</li></ul></div></div></div>';
                                    $form = \yii\bootstrap5\ActiveForm::begin([
                                        'method' => 'post',
                                        'action' => '/site/contact',
                                        'options' => [
                                            'class' => 'form-layout js-validate',
                                            'id' => 'contact-us-form',
                                            'data-parsley-validate' => '',
                                        ]
                                    ]);
                                ?>
                                    <div class="form-layout__items">
                                        <div class="form-v">
                                            <div class="form-layout__item ">
                                                <div class="form-layout__field">
                                                    <?= $form->field($model, 'name', ['template' => $template])->textInput(['class' => 'input input--default', 'placeholder' => 'Имя', 'required' => '', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'data-parsley-id'=>'20', 'data-parsley-minlength'=>'3']) ?>
                                                </div>
                                            </div>
                                            <div class="form-layout__item ">
                                                <div class="form-layout__field">
                                                    <?= $form->field($model, 'email', ['template' => $template])->textInput(['class' => 'input input--default', 'placeholder' => 'E-mail', 'required' => '', 'data-parsley-required' => 'true', 'data-parsley-type'=>'email']) ?>
                                                </div>
                                            </div>
                                            <div class="form-layout__item form-layout__item--tel form-layout__item--tel ">
                                                <div class="form-layout__field">
                                                    <?= $form->field($model, 'phone', ['template' => $template])->textInput(['class' => 'input input--default', 'placeholder' => '+7(XXX)XXXXXXX', 'required' => '', 'data-parsley-required' => 'true']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item ">
                                            <div class="form-layout__field">
                                                <?= $form->field($model, 'direction', ['template' => $template])->dropDownList([
                                                            'Приобретение техники' => 'Приобретение техники',
                                                            'Запрос информации о сервисе' => 'Запрос информации о сервисе',
                                                            'Работа в Ростсельмаш' => 'Работа в Ростсельмаш',
                                                            'Сообщить об ошибке на сайте' => 'Сообщить об ошибке на сайте',
                                                            'Запись на экскурсию' => 'Запись на экскурсию',
                                                            'Внести предложение или оставить отзыв' => 'Внести предложение или оставить отзыв',
                                                            'Прочее' => 'Прочее',
                                                        ], [
                                                            'class' => 'input input--default',
                                                            'placeholder' => 'Выберите тему сообщения',
                                                            'data' => [
                                                                'select' => '',
                                                                'select-size' => 'default',
                                                                'select-theme' => 'light',
                                                                'select-placeholder' => 'Выберите тему сообщения',
                                                                'select2-id' => 'contactform-direction',
                                                            ]
                                                        ]) ?>
                                            </div>
                                        </div>
                                        <div class="form-layout__item ">
                                            <div class="form-layout__field">
                                                            <?= $form->field($model, 'message', ['template' => '{input}'])->textInput(['class' => 'input input--default', 'placeholder' => 'Ваш вопрос']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-layout__actions">
                                        <div class="form-layout__action">
                                            <button type="submit" class="btn btn--gray btn--hover-red">
                                                <span class="btn__text ">Отправить</span>
                                            </button>
                                        </div>
                                        <div class="form-layout__privacy">
                                            <div class="field theme-primary">
                                                <div class="control">
                                                    <label class="checkbox checkbox--primary ">
                                                        <input type="checkbox" class="checkbox__input"
                                                               name="application-form-privacy"
                                                               id="application-form-privacy" required=""
                                                               data-parsley-multiple="application-form-privacy">
                                                        <span class="checkbox__box"></span>
                                                        <span class="checkbox__inner">
                                                            <i class="icon is-small" aria-hidden="true">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="1" y="1" width="22" height="22"
                                                                          fill="#212121" stroke="#212121"
                                                                          stroke-width="2"></rect>
                                                                    <path d="M5 12L9.66667 17L19 7" stroke="white"
                                                                          stroke-width="2"></path>
                                                                </svg>
                                                            </i>
                                                        </span>
                                                        <span class="checkbox__text">Нажимая «Отправить» , Вы соглашаетесь с
                                                            <a href="/privacy-policy/" class="">Политикой конфиденциальности</a> и
                                                            <a href="/terms-of-use/" class="">обработкой персональных данных</a>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    \yii\bootstrap5\ActiveForm::end();
                                ?>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-with-anim modal--application" id="technic-invite">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal__scroll-wrapper js-perfect-scrollbar ps">
                        <h3 class="modal__head h3">Подача заявки на технику</h3>
                        <div class="modal__description text-default">Оставьте заявку и наши менеджеры свяжутся с вами и
                            ответят на все вопросы.
                        </div>
                        <div class="modal__body">
                            <div class="modal__left">
                                <form name="application-form-modal" action="/products/send" method="POST"
                                      class="form-layout js-validate" id="application-form-modal"
                                      data-parsley-validate="" novalidate="" data-parsley-initialized="">
                                    <div class="form-layout__items">
                                        <div class="form-layout__item form-layout__item--no-full-width hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input name="PROP_PRODUCT_NAME"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--no-full-width hidden">
                                            <div class="form-layout__field">
                                                <div class="field field--hidden">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input name="PROP_PRODUCT_ID"
                                                                   class="input input--default not-empty" type="hidden"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--no-full-width ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input name="PROP_NAME" class="input input--default"
                                                                   placeholder="Имя" type="text"
                                                                   required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item form-layout__item--tel form-layout__item--tel ">
                                            <div class="form-layout__field">
                                                <div class="field">
                                                    <div class="control">
                                                        <div class="input-shell">
                                                            <input name="PROP_PHONE" class="input input--default"
                                                                   placeholder="+7 (___) ___ __ __" data-mask-tel=""
                                                                   data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                                                   type="tel" inputmode="tel" required="required"
                                                                   data-parsley-trigger="change"
                                                                   data-initialized-mask="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item ">
                                            <div class="form-layout__field">
                                                <div class="field theme-light">
                                                    <div class="control">
                                                        <select class="select select2-hidden-accessible"
                                                                name="PROP_DIRECTION"
                                                                data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required="" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option value="Новосибирская область">
                                                                Новосибирская область
                                                            </option>
                                                            <option value="Ярославская область">
                                                                Ярославская область
                                                            </option>
                                                            <option value="Костромская область">
                                                                Костромская область
                                                            </option>
                                                            <option value="Республика Хакасия">
                                                                Республика Хакасия
                                                            </option>
                                                            <option value="Иркутская область">
                                                                Иркутская область
                                                            </option>
                                                            <option value="Смоленская область">
                                                                Смоленская область
                                                            </option>
                                                            <option value="Московская область">
                                                                Московская область
                                                            </option>
                                                            <option value="Омская область">
                                                                Омская область
                                                            </option>
                                                            <option value="Брянская область">
                                                                Брянская область
                                                            </option>
                                                            <option value="Курская область">
                                                                Курская область
                                                            </option>
                                                            <option value="Республика Тыва">
                                                                Республика Тыва
                                                            </option>
                                                            <option value="Красноярский край">
                                                                Красноярский край
                                                            </option>
                                                            <option value="Тамбовская область" <?= (intval(\Yii::$app->session->get('branch')) === 1) ? 'selected' : '' ?>>
                                                                Тамбовская область
                                                            </option>
                                                            <option value="Белгородская область">
                                                                Белгородская область
                                                            </option>
                                                            <option value="Томская область">
                                                                Томская область
                                                            </option>
                                                            <option value="Воронежская область">
                                                                Воронежская область
                                                            </option>
                                                            <option value="Липецкая область" <?= (intval(\Yii::$app->session->get('branch')) === 2) ? 'selected' : '' ?>>
                                                                Липецкая область
                                                            </option>
                                                            <option value="Республика Алтай">
                                                                Республика Алтай
                                                            </option>
                                                            <option value="Забайкальский край">
                                                                Забайкальский край
                                                            </option>
                                                            <option value="Тверская область">
                                                                Тверская область
                                                            </option>
                                                            <option value="Ивановская область">
                                                                Ивановская область
                                                            </option>
                                                            <option value="Алтайский край">
                                                                Алтайский край
                                                            </option>
                                                            <option value="Владимирская область">
                                                                Владимирская область
                                                            </option>
                                                            <option value="Орловская область">
                                                                Орловская область
                                                            </option>
                                                            <option value="Кемеровская область">
                                                                Кемеровская область
                                                            </option>
                                                            <option value="Тульская область">
                                                                Тульская область
                                                            </option>
                                                            <option value="Калужская область">
                                                                Калужская область
                                                            </option>
                                                            <option value="Республика Бурятия">
                                                                Республика Бурятия
                                                            </option>
                                                            <option value="Рязанская область">
                                                                Рязанская область
                                                            </option>
                                                            <option value="Ростовская область">
                                                                Ростовская область
                                                            </option>
                                                            <option value="Краснодарский край">
                                                                Краснодарский край
                                                            </option>
                                                            <option value="Тюменская область">
                                                                Тюменская область
                                                            </option>
                                                            <option value="Республика Башкортостан">
                                                                Республика Башкортостан
                                                            </option>
                                                            <option value="Свердловская область">
                                                                Свердловская область
                                                            </option>
                                                            <option value="Челябинская область">
                                                                Челябинская область
                                                            </option>
                                                            <option value="Оренбургская область">
                                                                Оренбургская область
                                                            </option>
                                                            <option value="Республика Удмуртия">
                                                                Республика Удмуртия
                                                            </option>
                                                            <option value="Курганская область">
                                                                Курганская область
                                                            </option>
                                                            <option value="Приморский край">
                                                                Приморский край
                                                            </option>
                                                            <option value="Амурская область">
                                                                Амурская область
                                                            </option>
                                                            <option value="Ставропольский край">
                                                                Ставропольский край
                                                            </option>
                                                            <option value="Самарская область">
                                                                Самарская область
                                                            </option>
                                                            <option value="Волгоградская область">
                                                                Волгоградская область
                                                            </option>
                                                            <option value="Пензенская область">
                                                                Пензенская область
                                                            </option>
                                                            <option value="Саратовская область">
                                                                Саратовская область
                                                            </option>
                                                            <option value="Республика Татарстан">
                                                                Республика Татарстан
                                                            </option>
                                                            <option value="Ленинградская Область">
                                                                Ленинградская Область
                                                            </option>
                                                            <option value="Пермский край">
                                                                Пермский край
                                                            </option>
                                                            <option value="Республика Крым">
                                                                Республика Крым
                                                            </option>
                                                            <option value="Минская область">
                                                                Минская область
                                                            </option>
                                                            <option value="Республика Мордовия">
                                                                Республика Мордовия
                                                            </option>
                                                            <option value="Хабаровский край">
                                                                Хабаровский край
                                                            </option>
                                                            <option value="Нижегородская область">
                                                                Нижегородская область
                                                            </option>
                                                            <option value="Чувашская Республика">
                                                                Чувашская Республика
                                                            </option>
                                                            <option value="Кировская область">
                                                                Кировская область
                                                            </option>
                                                            <option value="Республика Саха (Якутия)">
                                                                Республика Саха (Якутия)
                                                            </option>
                                                            <option value="Калининградская область">
                                                                Калининградская область
                                                            </option>
                                                            <option value="Еврейская автономная область">
                                                                Еврейская автономная область
                                                            </option>
                                                            <option value="Республика Дагестан">
                                                                Республика Дагестан
                                                            </option>
                                                            <option value="Ульяновская область">
                                                                Ульяновская область
                                                            </option>
                                                            <option value="Новгородская область">
                                                                Новгородская область
                                                            </option>
                                                            <option value="Вологодская область">
                                                                Вологодская область
                                                            </option>
                                                            <option value="Псковская Область">
                                                                Псковская Область
                                                            </option>
                                                            <option value="Республика Калмыкия">
                                                                Республика Калмыкия
                                                            </option>
                                                            <option value="Республика Чебоксары">
                                                                Республика Чебоксары
                                                            </option>
                                                            <option value="Москва">
                                                                Москва
                                                            </option>
                                                            <option value="Чеченская Республика">
                                                                Чеченская Республика
                                                            </option>
                                                            <option value="Мурманская область">
                                                                Мурманская область
                                                            </option>
                                                            <option value="Республика Адыгея">
                                                                Республика Адыгея
                                                            </option>
                                                            <option value="Республика Северная Осетия (Алания)">
                                                                Республика Северная Осетия (Алания)
                                                            </option>
                                                            <option value="Республика Ингушетия">
                                                                Республика Ингушетия
                                                            </option>
                                                            <option value="Кабардино-Балкарская Республика">
                                                                Кабардино-Балкарская Республика
                                                            </option>
                                                            <option value="Республика Карелия">
                                                                Республика Карелия
                                                            </option>
                                                            <option value="Карачаево-Черкесская Республика">
                                                                Карачаево-Черкесская Республика
                                                            </option>
                                                            <option value="Республика Марий Эл">
                                                                Республика Марий Эл
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-layout__actions">
                                        <div class="form-layout__action">
                                            <button type="submit" class="btn btn--gray btn--hover-red			">
                                                <span class="btn__text ">Отправить</span>
                                            </button>
                                        </div>
                                        <div class="form-layout__privacy">
                                            <div class="field theme-primary">
                                                <div class="control">
                                                    <label class="checkbox checkbox--primary ">
                                                        <input type="checkbox" class="checkbox__input"
                                                               name="application-form-privacy"
                                                               id="245782application-form-privacy" required=""
                                                               data-parsley-multiple="application-form-privacy">

                                                        <span class="checkbox__box"></span>

                                                        <span class="checkbox__inner">
                                                            <i class="icon is-small" aria-hidden="true">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="1" y="1" width="22" height="22" fill="#212121" stroke="#212121" stroke-width="2"></rect>
                                                                    <path d="M5 12L9.66667 17L19 7" stroke="white" stroke-width="2"></path>
                                                                </svg>
                                                            </i>
                                                        </span>
                                                        <span class="checkbox__text">Нажимая «Отправить» , Вы соглашаетесь с <a
                                                                    href="/privacy-policy/" class="">Политикой конфиденциальности</a> и <a
                                                                    href="/terms-of-use/" class="">обработкой персональных данных</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal mfp-with-anim modal--card modal--feedback" id="modal-region">
                <button title="Close (Esc)" type="button" class="mfp-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                        <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                    </svg>
                </button>
                <div class="modal__content bg-white">
                    <div class="modal-card js-perfect-scrollbar ps ps--active-y">
                        <div class="modal__scroll-wrapper js-perfect-scrollbar ps">
                            <h3 style="margin-bottom: 40px" class=" review_name block-slider__slide-content-title"></h3>
                            <div class="modal__body">
                                <div class="modal__left">
                                    <ul class="region-list">
                                        <?php
                                        $branches = \common\models\Branch::find()->where(['type' => 1])->all();
                                        foreach ($branches as $branch) {
                                            echo "<li><a class=\"link-action\" href=\"/branch/set?id={$branch->id}\">
                                                <span class=\"link-action__text\">{$branch->city}</span>
                                            </a>
                                        </li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<style>
    .site-error {
        margin-top: 150px;
    }
</style>
<?php
$this->endPage();
