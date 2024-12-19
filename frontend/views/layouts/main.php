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
$branch = \common\models\Branch::findOne(\Yii::$app->session->get('branch'));
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
            "/bitrix/js/main/core/core.min.js",
            "/bitrix/js/pull/protobuf/protobuf.min.js",
//            "/bitrix/js/pull/protobuf/model.min.js",
            "/bitrix/js/rest/client/rest.client.min.js",
//            "/bitrix/js/pull/client/pull.client.min.js",
//            "/bitrix/js/main/pageobject/pageobject.min.js",
//            '/bitrix/js/main/core/core_window.min.js',
            '/dist/prog/app.js',
            '/dist/js/stycky-kit.js',
            '/local/templates/.default/custom.js?t=1',
            '/dist/js/vendors~index.chunk.js?16116541111101440',
            '/local/templates/.default/script.js',
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
            '/dist/js/owl.carousel.js',
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
                    console.log(response)
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
                                                        <select id="credit-prop-direction"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_REGION" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required=""
                                                                data-select2-id="824568PROP_REGION" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
<?php
foreach (\Yii::$app->params['regions'] as $key => $item) {
    $isSelected = $branch->region === $key ? "selected" : "";
    echo "<option value='$key' $isSelected>$item</option>";
}

$this->registerJs(<<<JS
    $("#credit-prop-direction").val( "$branch->region" )
JS);
                                                            ?>
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
                                                        <select id="lending-prop-direction"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_REGION" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required=""
                                                                data-select2-id="935353PROP_REGION" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
<?php
foreach (\Yii::$app->params['regions'] as $key => $item) {
    $isSelected = $branch->region === $key ? "selected" : "";
    echo "<option value='$key' $isSelected>$item</option>";
}

$this->registerJs(<<<JS
    $("#lending-prop-direction").val( "$branch->region" )
JS);
?>
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
                                                        <select id="insurance-prop-direction"
                                                                class="select select2-hidden-accessible"
                                                                name="PROP_REGION" data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required=""
                                                                data-select2-id="722456PROP_REGION" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
<?php
foreach (\Yii::$app->params['regions'] as $key => $item) {
    $isSelected = $branch->region === $key ? "selected" : "";
    echo "<option value='$key' $isSelected>$item</option>";
}

$this->registerJs(<<<JS
    $("#insurance-prop-direction").val( "$branch->region" )
JS);
?>
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
                                <form name="contact-us-form" action="/site/contact" method="POST" class="form-layout js-validate" id="contact-us-form" data-parsley-validate="" novalidate="" data-parsley-initialized="">
                                    <div class="form-layout__items">
                                        <div class="form-v">
                                            <div class="form-layout__item ">
                                                <div class="form-layout__field">
                                                    <div class="field">
                                                        <div class="control">
                                                            <div class="input-shell">
                                                                <input name="ContactForm[name]" class="input input--default" placeholder="Имя" type="text" required="" />
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
                                                                <input name="ContactForm[email]" class="input input--default" placeholder="E-mail" type="email" data-parsley-type="email" inputmode="email" required="" data-parsley-trigger="change">
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
                                                                <input name="ContactForm[phone]" class="input input--default" placeholder="+7 (___) ___ __ __" data-mask-tel="" data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" type="tel" inputmode="tel" required="" data-parsley-trigger="change" data-initialized-mask="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item ">
                                            <div class="form-layout__field">
                                                <div class="form-group field-contactform-direction required">
                                                    <div class="field">
                                                        <div class="control">
                                                            <div class="input-shell">
                                                                <select class="input input--default not-empty select2-hidden-accessible" name="ContactForm[direction]" placeholder="Выберите тему сообщения" data-select="" data-select-size="default" data-select-theme="light" data-select-placeholder="Выберите тему сообщения" data-select2-id="contactform-direction" aria-required="true" tabindex="-1" aria-hidden="true">
                                                                    <option value="Приобретение техники" data-select2-id="12">Приобретение техники</option>
                                                                    <option value="Запрос информации о сервисе">Запрос информации о сервисе</option>
                                                                    <option value="Работа в Ростсельмаш">Работа в Ростсельмаш</option>
                                                                    <option value="Сообщить об ошибке на сайте">Сообщить об ошибке на сайте</option>
                                                                    <option value="Запись на экскурсию">Запись на экскурсию</option>
                                                                    <option value="Внести предложение или оставить отзыв">Внести предложение или оставить отзыв</option>
                                                                    <option value="Прочее">Прочее</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-layout__item ">
                                            <div class="form-layout__field">
                                                <div class="form-group field-contactform-message required">
                                                    <input type="text" class="input input--default" name="ContactForm[message]" placeholder="Ваш вопрос" aria-required="true">
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
                                                                id="invite-prop-direction"
                                                                name="PROP_DIRECTION"
                                                                data-select=""
                                                                data-select-size="default" data-select-theme="light"
                                                                data-select-placeholder="Например, Московская область"
                                                                data-select-search="true" required="" tabindex="-1"
                                                                aria-hidden="true">
                                                            <option label="Например, Московская область"></option>
<?php
foreach (\Yii::$app->params['regions'] as $key => $item) {
    $isSelected = $branch->region === $key ? "selected" : "";
    echo "<option value='$key' $isSelected>$item</option>";
}

$this->registerJs(<<<JS
    $("#invite-prop-direction").val( "$branch->region" )
JS);
?>
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
<?php
$this->endPage();
