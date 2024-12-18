<?php

use yii\web\View;

/**
 * @var View $this
 */

$this->registerCssFile("/redizine/parts/custom.css");
$this->registerCssFile("/redizine/parts/style.css");
$this->registerCssFile("/redizine/parts/components.css");
$this->registerJsFile("/local/templates/.default/custom.js");
$this->registerJsFile("https://widgets-04.livetex.me/js/ui.24.48.4854-02f1c3d.js");
$this->registerCss(<<<CSS
.video_banner video {
    height: 140%;
    margin-top: -200px;
}
#vidtop-content {
    top: 0;
}
CSS);
?>
<div class="hero-main video_banner">
    <div class="hero-main__wrap">
        <div>
            <canvas class="main-slider__canvas main-slider__canvas--loaded" width="1377" height="100%"></canvas>
            <div class="main-slider__slides">
                <div class="main-slider__slides-overlay"></div>
                <div class="video-background" style="overflow: hidden">
                    <div class="video-foreground" style="display: block;">
                        <video style="filter: brightness(70%);" autoplay="autoplay" src="/videos/video.mp4" preload="auto" muted="muted" playsinline="" loop="loop" width="100%" height="auto">
                        </video>
                    </div>
                </div>
                <div data-id="0" id="vidtop-content" data-src="" class="main-slider-slide active">
                    <div class="main-slider-slide__content">
                        <div class="main-slider-slide__main">
                            <div class="main-slider-slide__title h2">
                                Оригинальные запасные части и сервисное обслуживание
                            </div>
                            <div class="main-slider-slide__actions">
                                <div class="main-slider-slide__action">
                                    <p class="user-text video_banner__text"></p>
                                    <p>
                                        <a href="https://pp.rostselmash.com" class="btn btn--primary btn--hover-gray" target="_blank"><span class="btn__text ">Онлайн-каталог запчастей</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-slide__fact flex flex-wrap col-6 space-between">
                            <div class="main-slider-slide__fact-wrap ">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
                                        <span class="factor__number">
                                            <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">100</span>
                                        </span>
                                        <span class="factor__suffix"> <span style="display: none;">100</span>
                                            <span class="factor__number-value" style="margin-left: 16px;">%</span>
                                        </span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Обеспеченность <br>
                                        запасными запчастями
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-slide__fact-wrap col-6">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
                                        <span class="factor__number">
                                            <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">24</span><span class="factor__number-value" style="margin-left:2px; margin-right: 2px;">/</span>
                                            <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">7</span>
                                        </span>
                                        <span class="factor__suffix"> <span style="display: none;">40</span>
                                            <span style="display: none;">7</span></span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Круглосуточная <br>
                                        поддержка
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-slide__fact-wrap">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
                                        <span class="factor__number">
                                            <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">12</span>
                                        </span>
                                        <span class="factor__suffix"> <span style="display: none;">12</span> </span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Месяцев гарантии
                                        на <br>запчасти
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
<!--            <div class="main-slider-controls">-->
<!--                <div class="main-slider-info">-->
<!--                    <div style="z-index:10" class="main-slider-info__title text-default">Агротехника Профессионалов</div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>
<div class="wrapper pt-md-64 pb-md-80 pb-40">
    <div class="content-wrapper wrap-pl-1 wrap-pr-1 content-wrapper--no-photo content-wrapper__before-full" style="padding-top: 4rem; background: #fff;">
        <div class="content content__grid-aside content__user-text-wrap--author">
            <div class="content__main-content" style="z-index: 4;background: #fff;">

                <div class="content__user-text-wrap">
                    <div class="content__user-text user-text text-default mt-0">
                        <h1 class="block-slider__title block-slider__title--gap-sm h2">Запчасти для сельхозтехники: трактора, комбайны, навесное оборудование</h1>
                        <p>
                            Главная задача сервисных центров Ростсельмаш – обеспечить максимально эффективную работу Вашей техники в течение гарантийного и постгарантийного периода.
                        </p>
                        <p>
                            Квалифицированные сотрудники наших сервисных центров проведут плановое техническое обслуживание, диагностику, дефектовку и ремонт Вашей машины. Так Вы снимите нагрузку с ваших работников, оставив им только ежедневное обслуживание техники, и будете уверены в качестве проведенных работ.
                        </p>
                        <p>
                            Ростсельмаш придерживается строгих стандартов качества не только к производимой технике, но и к запасным частям. Каждый этап от проектирования до производства и хранения проходит строгий контроль качества.
                        </p>
                        <p>
                            Чтобы все механизмы работали слажено, они должны идеально соотноситься между собой и соответствовать машине, на которую они устанавливаются. Этого можно добиться только с оригинальными деталями. Сервисные центры Ростсельмаш гарантируют качество и оригинальность своевременно поставляемых запасных частей, а также оперативность технических работ.
                        </p>
                        <p>
                            Полагаясь на нас и приобретая оригинальные запасные части Ростсельмаш, Вы получаете высокую производительность Ваших машин.
                        </p>
                        <div class="block-slider__image-main">
                            <img src="/upload/parts/1.png" alt="">
                        </div>
                    </div>


                    <div class="content__user-text user-text text-default mt-0">
                        <h2 class="block-slider__title block-slider__title--gap-sm h2">
                            Преимущества сервиса <br>
                            и запасных частей
                        </h2>
                        <p>Уникальное преимущество Ростсельмаш – разветвленная дилерская и сервисная сеть.
                            Все сервисные центры осуществляют свою деятельность по единому стандарту Ростсельмаш и соответствуют следующим требованиям:</p>
                        <div class="text-2-cols">
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Ремонтная база
                                </div>
                                <div class="text-2-cols__text">
                                    Оснащена контрольно-измерительным и универсальным оборудованием в соответствии со стандартами Ростсельмаш
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Услуги
                                </div>
                                <div class="text-2-cols__text">
                                    Полный спектр услуг по ремонту техники Ростсельмаш (ремонт топливной аппаратуры, ДВС), проведение экспресс анализа технической жидкости
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Сертифицированные сотрудники
                                </div>
                                <div class="text-2-cols__text">
                                    Все сервисные инженеры проходят несколько этапов обучения в «Академии Ростсельмаш», расположенной на базе основной производственной площадки
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Гарантии от производителя
                                </div>
                                <div class="text-2-cols__text">
                                    6 месяцев на ремонтные работы, 12 месяцев на запасные части, оригинальность запасных частей и расходных материалов, квалифицированные сотрудники сервиса
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Наличие запасных частей
                                </div>
                                <div class="text-2-cols__text">
                                    На складах дилерских центров постоянно поддерживается полный набор запасных частей и расходных материалов
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Штат специалистов
                                </div>
                                <div class="text-2-cols__text">
                                    Более 800 человек обученных и сертифицированных Ростсельмаш для ремонта машин и агрегатов производителя
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Мобильный сервис
                                </div>
                                <div class="text-2-cols__text">
                                    Более 450 специально оборудованных автомобилей сервиса
                                </div>
                            </div>
                            <div class="text-2-cols__item">
                                <div class="text-2-cols__title">
                                    Развитая дилерская сеть
                                </div>
                                <div class="text-2-cols__text">
                                    Более 90 дилерских центров
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                    <div class="info-block-anim red-bg">
                        <div class=" flex flex-wrap  space-between">
                            <div class=" col-6">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
            <span class="factor__number">
                <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">24</span><span class="factor__number-value" style="margin-left:2px; margin-right: 2px;">/</span>
                <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">7</span>
            </span>
                                        <span class="factor__suffix"> <span style="display: none;">40</span>
                <span style="display: none;">7</span></span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Круглосуточная работа всех сервисных центров в сельскохозяйственный сезон
                                    </div>
                                </div>
                            </div>
                            <div class=" col-6">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
            <span class="factor__number">
                <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">48</span>
            </span>
                                        <span class="factor__suffix"> <span style="display: none;">48</span> </span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Часов на ремонт, не требующий  <br>разборки основных узлов
                                    </div>
                                </div>
                            </div>
                            <div class=" col-6">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
            <span class="factor__number">
                <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">5</span>
            </span>
                                        <span class="factor__suffix"> <span style="display: none;">5</span> </span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Суток при необходимости демонтажа  <br>и замены базовых деталей
                                    </div>
                                </div>
                            </div>

                            <div class=" col-6">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__head">
                                        <span class="factor__number">
                                            <span class="factor__number-value animate" data-counter="" data-counter-separator=" ">12</span>
                                        </span>
                                        <span class="factor__suffix"> <span style="display: none;">12</span> </span>
                                    </div>
                                    <div class="factor__text text-default animate" data-animate="fade-in-up" data-animate-delay="1">
                                        Месяцев гарантии на <br>запасные части
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="content__user-text user-text text-default mb-30">
                        <div class="tabs tabs--small ">
                            <div class="tabs__wrap">
                                <div class="tabs__head">
                                    <div class="tabs-list">
                                        <div class="tabs-list__wrap js-tabs-list js-tabs-list-reactivate-sliders">
                                            <button class="tabs-list__fade tabs-list__fade--left js-tab-scroll" data-direction="left"></button>
                                            <button class="tabs-list__fade tabs-list__fade--right js-tab-scroll" data-direction="right"></button>
                                            <button type="button" class="tabs-list__el active tabs-list__el-t-0" data-tab="" data-hash="sl-0" data-hash-link-slide="0">
                                                Транспортер цепной                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-0" data-tab="" data-hash="sl-1" data-hash-link-slide="1">
                                                Фильтр воздушный                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-0" data-tab="" data-hash="sl-2" data-hash-link-slide="2">
                                                Опора вала                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-0" data-tab="" data-hash="sl-3" data-hash-link-slide="3">
                                                Ремень                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-0" data-tab="" data-hash="sl-4" data-hash-link-slide="4">
                                                Блок шкивов                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-0" data-tab="" data-hash="sl-5" data-hash-link-slide="5">
                                                Муфта                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-content-wrap has-slider">
                                    <div class="tabs-content">


                                        <div class="js-content-with-slider content-width-slider-wrapper swiper-container js-content-with-slider-0 swiper-container-initialized swiper-container-horizontal">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide swiper-slide-active" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/o8n74evswhijn9sxf1lk22o8l8yg57hd.png" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                АХЦ Б142.03.33.500 транспортер цепной                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p><b>Наименование:</b> АХЦ Б142.03.33.500 транспортер цепной</p>
                                                                <p><b>Описание:</b> Транспортер наклонной камеры ACROS безбитерная наклонная камера</p>
                                                                <p><b>Применяемость:</b> ACROS 550/585</p>
                                                                <p><b>Код продукта для заказа:</b> 102904089</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/1qmtj6lr0kyge7ym1c39881fpwegkvdv.png" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Фильтр воздушный                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p><b>Наименование:</b> P788963 фильтр воздушный</p>
                                                                <p><b>Описание:</b> Фильтр воздушный</p>
                                                                <p><b>Применяемость:</b> VECTOR-410/420 (с двигателем ЯМЗ-36НД), ACROS-530/560 (с двигателем ЯМЗ-236БК</p>
                                                                <p><b>Код продукта для заказа:</b> 101333034</p>                                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/erm7xp3mbhqqemhzns3lhms6y6mtu9np.png" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Опора вала                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p><b>Наименование:</b> 2071741 опора промежуточная</p>
                                                                <p><b>Описание:</b> Подшипник с фланцем на 4 болта к тракторам моделей 2000-2335, 2375, 2425 и моделей HHT-435, 485, 535</p>
                                                                <p><b>Применяемость:</b> Тракторы серии 2000-2335, 2375, 2425 и моделей HHT-435, 485, 535</p>
                                                                <p><b>Код продукта для заказа:</b> 103479746</p>                                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/npr1knm8fgpef4h1nfyutz4o9su10ua6.png" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Ремень                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p><b>Наименование:</b> 6201094 DP ремень</p>
                                                                <p><b>Описание:</b> Ремень шкива верхнего вала наклонной камеры - Шкив трансмисионного (раздаточного) вала наклонной камеры</p>
                                                                <p><b>Применяемость:</b> ACROS, VECTOR</p>
                                                                <p><b>Код продукта для заказа:</b> 103623904</p>                                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/7hg7fi09tykg2f4p9sb5bbdqiyu1vpzv.png" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Блок шкивов                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p><b>Наименование:</b> 181.03.40.550 блок шкивов</p>
                                                                <p><b>Описание:</b> Блок шкивов наклонной камеры</p>
                                                                <p><b>Применяемость:</b> TORUM</p>
                                                                <p><b>Код продукта для заказа:</b> 101640435</p>                                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/o21yw32jnkxanaalogxt6luwbtezas13.png" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Муфта                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p><b>Наименование:</b> H6-62-384A муфта разрывная 3/4"</p>
                                                                <p><b>Описание:</b> Полумуфта БРС наружная Ф резьбы = 26,44 мм</p>
                                                                <p><b>Применяемость:</b> Тракторы серии 2000, HHT</p>
                                                                <p><b>Код продукта для заказа:</b> 103244219</p>                                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-pagination swiper-pagination-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>


                                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="content__user-text user-text text-default mb-60 mt-0">
                        <h2 class="block-slider__title h2">
                            Последствия приобретения <br> контрафактных запасных частей
                        </h2>
                        <p>У контрафактных запасных частей есть всего 2 преимущества: доступность и низкая цена. Разветвленная сеть сервисных центров, круглосуточно работающих в сезон, делает оригинальные запчасти Ростсельмаш максимально доступными. А значит вопрос только в низкой цене.
                        </p>
                        <p>Цена на деталь напрямую связанна с условиями ее производства и хранения. Покупая запчасти по более низкой цене, Вы берете на себя риски, заложенные в производство таких деталей:
                        </p>
                        <style>
                            ul.custom-style {
                                width: 100%;
                                margin: 0 0 0 35px !important;
                            }
                            @media screen and (max-width: 575px) {
                                ul.custom-style {
                                    margin: 0 !important;
                                }
                            }
                        </style>
                        <ul class="custom-style">
                            <li>некачественный материал
                            </li>
                            <li>исключение из технологического процесса части операций
                            </li>
                            <li>использование примитивного оборудования и инструментов
                            </li>
                            <li>недостаточная квалификация сотрудников изготовителя контрафакта
                            </li></ul>
                        <p>Повторить в кустарных и полукустарных условиях характеристики оригинальных запчастей попросту невозможно. Экономя на запчастях сейчас, Вы получаете не только короткий срок их службы, но и сокращаете срок работы остальных деталей и самой машины.
                        </p>
                        <p><a href="#form-text-detail-1" data-modal="" data-effect="mfp-move-from-left">Подробнее</a></p>
                    </div>

                    <div class="content__user-text user-text text-default mt-0">
                        <div class="tabs tabs--small ">
                            <div class="tabs__wrap">
                                <div class="tabs__head">
                                    <div class="tabs-list">
                                        <div class="tabs-list__wrap js-tabs-list js-tabs-list-reactivate-sliders">
                                            <button class="tabs-list__fade tabs-list__fade--left js-tab-scroll" data-direction="left"></button>
                                            <button class="tabs-list__fade tabs-list__fade--right js-tab-scroll" data-direction="right"></button>
                                            <button type="button" class="tabs-list__el active tabs-list__el-t-1" data-tab="" data-hash="sl-1-0" data-hash-link-slide="0">
                                                Битер отборный                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-1" data-tab="" data-hash="sl-1-1" data-hash-link-slide="1">
                                                Бичи барабана                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-1" data-tab="" data-hash="sl-1-2" data-hash-link-slide="2">
                                                Подбарабанье                                                </button>
                                            <button type="button" class="tabs-list__el tabs-list__el-t-1" data-tab="" data-hash="sl-1-3" data-hash-link-slide="3">
                                                Шкив ведущего вариатора                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-content-wrap has-slider">
                                    <div class="tabs-content">


                                        <div class="js-content-with-slider content-width-slider-wrapper swiper-container js-content-with-slider-1 swiper-container-initialized swiper-container-horizontal">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide swiper-slide-active" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/037d2ra8uate1p3dfu1zl35uvydvhop5.jpeg" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Битер отбойный для зерноуборочных комбайнов Ростсельмаш                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p>
                                                                    <b>Возможные неисправности при использовании альтернативной запасной части:</b>
                                                                </p>
                                                                <p>
                                                                    Разрыв лопасти битера. Выход из строя опоры <br>
                                                                    с подшипником и отбойного битера с валом.
                                                                </p>
                                                                <p>
                                                                    Минимая экономия: <b>52 325 руб.</b>
                                                                </p>
                                                                <p>
                                                                    Риски клиента или упущенная выгода: <b>2 969 875 руб.<br>
                                                                    </b>
                                                                </p>                                                                            </div>
                                                            <div class="content-width-slider__btn">
                                                                <a target="_blank" href="/spare-parts/spares/biter_acros2024.pdf" class="btn btn--primary btn--hover-white">
                                                                                    <span class="btn__text ">Полное
                                                                                        сравнение</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/l222a491p8q9a00n6oefuxrl743qjnkk.jpeg" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Бичи барабана                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p>
                                                                    <b>Возможные неисправности при использовании альтернативной запасной части:</b>
                                                                </p>
                                                                <p>
                                                                    Трещины в сварных швах, отклонения от контрольных размеров, <br>
                                                                    обрыв прутков подбарабанья.
                                                                </p>
                                                                <p>
                                                                    Мнимая экономия: <b>37 500 руб.</b>
                                                                </p>
                                                                <p>
                                                                    Риски клиента или упущенная выгода: <b>2 167 250 руб.<br>
                                                                    </b>
                                                                </p>                                                                            </div>
                                                            <div class="content-width-slider__btn">
                                                                <a target="_blank" href="https://rostselmash.com/spare-parts/spares/bichi_acros2024.pdf" class="btn btn--primary btn--hover-white">
                                                                                    <span class="btn__text ">Полное
                                                                                        сравнение</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/pajvxonzevjszpr8iy6bj878e8b0im5k.jpeg" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Подбарабанье                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p>
                                                                    <b>Возможные неисправности при использовании альтернативной запасной части:</b>
                                                                </p>
                                                                <p>
                                                                    Трещины в сварных швах, отклонения от контрольных размеров,<br>
                                                                    обрыв прутков подбарабанья.
                                                                </p>
                                                                <p>
                                                                    Минимая экономия: <b>33 295 руб.</b>
                                                                </p>
                                                                <p>
                                                                    Риски клиента или упущенная выгода: <b>1 998 879 руб<br>
                                                                    </b>
                                                                </p>                                                                            </div>
                                                            <div class="content-width-slider__btn">
                                                                <a target="_blank" href="https://rostselmash.com/spare-parts/spares/podbaraban_acros2024.pdf" class="btn btn--primary btn--hover-white">
                                                                                    <span class="btn__text ">Полное
                                                                                        сравнение</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 1184px; margin-right: 10px;">
                                                    <div class="content-width-slider">
                                                        <div class="content-width-slider__slider">
                                                            <div class="content-width-slider__slider-img">
                                                                <img src="/upload/parts/6ufui20n8tyrdh0sma3x08poirpj792o.jpeg" class="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content-width-slider__content">
                                                            <div class="content-width-slider__title">
                                                                Шкив ведущего вариатора                                                                            </div>
                                                            <div class="content-width-slider__text">
                                                                <p>
                                                                    <b>Возможные неисправности при использовании альтернативной запасной части:</b>
                                                                </p>
                                                                <p>
                                                                    Трещины в сварных швах, отклонения от контрольных размеров,<br>
                                                                    обрыв прутков подбарабанья.
                                                                </p>
                                                                <p>
                                                                    Минимая экономия: <b>17 200 руб.</b>
                                                                </p>
                                                                <p>
                                                                    Риски клиента или упущенная выгода: <b>2 095 020 руб.<br>
                                                                    </b>
                                                                </p>                                                                            </div>
                                                            <div class="content-width-slider__btn">
                                                                <a target="_blank" href="https://rostselmash.com/spare-parts/spares/shkiv_acros2024.pdf" class="btn btn--primary btn--hover-white">
                                                                                    <span class="btn__text ">Полное
                                                                                        сравнение</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination swiper-pagination-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__user-text user-text text-default equipment__content-wrapper">
                        <h2 class="block-slider__title h2">
                            Электронные системы
                        </h2>
                        <p>Для улучшения качества работы техники советуем использовать данные электронные системы</p>
                        <div class="equipment__content--small equipment__content animate" data-equipment-slider="" data-animate="">
                            <div class="equipment__slider swiper-container swiper-container-initialized swiper-container-horizontal" data-slider=" " style="cursor: grab;">
                                <div class="swiper-wrapper">
                                    <div class="equipment__slide swiper-slide swiper-slide-active" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/agrotronik-i-agronomicheskie-servisy/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/9zxqha81csceaapdf00z55drdtdj6ggc.jpg" alt="image">
                                                    </div>
                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>РСМ Агротроник и агрономические сервисы</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide swiper-slide-next" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/sistemy-identifikatsii-i-kontrolya/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/tyayau9b1xicbu3m4e2sfziow4fjgz1d.jpg" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>Системы идентификации</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/sistemy-avtoupravleniya-mashin/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/pubht0rpv8auef53qtqcte604u11ytdj.jpg" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>Системы автоуправления</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/sistemy-povysheniya-effektivnosti-zernouborochnykh-kombaynov/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/3ewp9p9jc0uqrvx7q2tk8w1nvkha006t.jpg" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>Системы повышения эффективности зерноуборочных комбайнов</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/povysheniya-effektivnosti-kormouborochnykh-kombaynov/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/s38xglhm226rlnf1jqi0tkviau26qavo.jpg" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>Системы повышения эффективности кормоуборочных комбайнов</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/sistemy-povysheniya-effektivnosti-traktorov/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/xfmmq761ojzvzp5qkiet7d1uw2jnqodz.JPG" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>Системы повышения эффективности тракторов</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/sistemy-avtoupravleniya-mashin/agrotronik-pilot-1-0/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/ngogsjeuuieczxj27tvsf7dn56by6blq.jpg" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>РСМ Агротроник Пилот 1.0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__slide swiper-slide" style="width: 396px;">
                                        <div class="equipment__inner">
                                            <div class="card">
                                                <a target="_blank" href="/electronic-systems/agrotronik-i-agronomicheskie-servisy/rsm-karta-urozhaynosti-zuk/" class="card__inner">
                                                    <div class="card__img">
                                                        <img class="image" src="/upload/parts/6xi09brkk9rd179op6p2hxudtza02r9v.jpg" alt="image">
                                                    </div>

                                                    <div class="card__info">
                                                        <div class="card__info-wrap">
                                                            <div class="card__title text-lead animate">
                                                                <div>
                                                                    <div>РСМ Карта урожайности</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="equipment__line" data-line=""></div>
                                </div>
                            </div>
                            <div class="equipment__bottom">
                                <div class="equipment__pagination">
                                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-bullets-dynamic" style="width: 150px;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="content__aside-content" style="z-index: 10">
                <script>
                    $(document).ready(function() {
                        $('#sp_region').on('input', function() {
                            let val = $(this).val();
                            $.get('form1.php', {'NAME': $(this).val()}, function (data) {
                                if (data && val) {
                                    $('#control--search-drop-2').html(data).show();
                                } else {
                                    $('#control--search-drop-2').hide();
                                }
                            });
                        })
                        $('#control--search-drop-2').on('click', 'a', function (e) {
                            e.preventDefault();
                            let text = $(this).text();
                            let id = $(this).attr('data-id');
                            $('#control--search-drop-2').hide();
                            $('#sp_val').val(text.trim());
                            $('#sp_region').val(text.trim());
                        })

                        $('#form-search-id').on('input', function () {
                            let val = $(this).val();
                            $.get('form1.php', {'NAME': $(this).val()}, function (data) {
                                if (data && val) {
                                    $('#control--search-drop').html(data).show();
                                } else {
                                    $('#control--search-drop').hide();
                                }
                            });
                            $('#sp_val').val('');
                        })
                        $('#control--search-drop').on('click', 'a', function (e) {
                            e.preventDefault();
                            let text = $(this).text();
                            let id = $(this).attr('data-id');
                            $('#form-search-id').val(text.trim());
                            $('#control--search-drop').hide();
                            $('#sp_val').val(text.trim());
                            $('#sp_region').val(text.trim());

                            $.get('form2.php', {'ID': id}, function (data) {
                                $('#control--search-result-id').html(data);
                            });
                        })

                        $('#sp-form input').on('input', function () {
                            let data = $('#sp-form').serializeArray();
                            let valid = true;
                            for (let i in data) {
                                let val = data[i];
                                if (
                                    val.value === ''
                                    && (
                                        val.name === 'fio'
                                        || val.name === 'PROP_PHONE'
                                        || val.name === 'region'
                                        || val.name === 'email'
                                    )
                                ) {
                                    valid = false;
                                }
                            }

                            if (valid) {
                                $('#sp-btn').attr('disabled', false);
                            } else {
                                $('#sp-btn').attr('disabled', 'disabled');
                            }
                        })

                        $('#sp-form').submit(function (e) {
                            e.preventDefault();
                            let data = $('#sp-form').serializeArray();
                            $.post('form3.php', data, function () {
                                document.getElementById("sp-form").reset();
                                $('#sp-btn').attr('disabled', 'disabled').text('Отправлено');
                                $("#sp-btn-thanks").click();
                                setTimeout(function () {
                                    $('#sp-btn').text('Отправить');

                                }, 3000)
                            });
                        })

                        $('.tabs-list__el').on('click', function (e) {
                            e.preventDefault();
                            let hash = $(this).attr('data-hash');
                            let parent = $(this).parents('.tabs');
                            parent.find('.tabs-list__el').removeClass('active')
                            $(this).addClass('active');
                            parent.find('.tabs-content__el').hide();
                            parent.find('[data-hash=' + hash + ']').show();
                        })



                    })
                </script>
                <div class="posstiky">
                    <div class="form-find-center" style="padding-bottom: 0px;">
                        <form action="" class="form-find-center__form">
                            <input type="hidden" id="sp_val" name="sp_val" value="">
                            <div class="form-find-center__title">Найдите свой сервисный центр</div>
                            <div class="form-find-center__descr">Укажите свое местоположение для отображения контактов
                                ближайших сервисных центров
                            </div>
                            <div class="form-find-center__search">

                                <div class="form-layout__field">
                                    <div class="field control--search-wrap">
                                        <div class="control control--search">
                                            <div class="input-shell">
                                                <input name="" autocomplete="off" id="form-search-id" class="input input--default" placeholder="Поиск" type="text">
                                            </div>
                                            <a class="header-nav__search-link" aria-label="Поиск" data-search-button="">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.16667" cy="9.16663" r="6.5" stroke="#101010" stroke-width="2"></circle>
                                                    <path d="M13.75 13.3334L17.9167 17.5" stroke="#101010" stroke-width="2"></path>
                                                </svg>

                                            </a>
                                        </div>
                                        <div class="field control--search-wrap">
                                            <div id="control--search-drop" class="control--search-drop" style="display: none">
                                                <div class="control--search-drop-item">
                                                    <a href="" class="control--search-drop-link">
                                                        <span class="control--search-drop-name">Московская область</span>
                                                        <span class="control--search-drop-val">Россия</span>
                                                    </a>
                                                </div>
                                                <div class="control--search-drop-item">
                                                    <a href="" class="control--search-drop-link">
                                                        <span class="control--search-drop-name">Москва</span>
                                                        <span class="control--search-drop-val">Россия</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-find-center">
                        <form id="sp-form" action="" class="form-find-center__form">
                            <div class="form-layout__field">

                                <div id="control--search-result-id" class="control--search-result">
                                    <div class="control--search-result-item">
                                        <div class="control--search-result-sub-text">
                                            Не выбран регион
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div class="form-find-center__title form-find-center__title--inner">Отправить заявку</div>
                                <div class="form-find-center__inputs">
                                    <div class="form-find-center__item">
                                        <div class="form-layout__field">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="input-shell">
                                                        <input name="fio" class="input input--default" placeholder="ФИО*" type="text" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-find-center__item">
                                        <div class="form-layout__field">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="input-shell">
                                                        <input name="PROP_PHONE" class="input input--default" placeholder="+7 (___) ___ __ __" data-mask-tel="" data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" type="tel" inputmode="tel" required="" data-parsley-trigger="change" data-initialized-mask="">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-find-center__item">
                                        <div class="form-layout__field">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="input-shell">
                                                        <input name="region" id="sp_region" class="input input--default" placeholder="Регион*" type="text" required="" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="field control--search-wrap">
                                                    <div id="control--search-drop-2" class="control--search-drop" style="display: none">
                                                        <div class="control--search-drop-item">
                                                            <a href="" class="control--search-drop-link">
                                                                <span class="control--search-drop-name">Московская область</span>
                                                                <span class="control--search-drop-val">Россия</span>
                                                            </a>
                                                        </div>
                                                        <div class="control--search-drop-item">
                                                            <a href="" class="control--search-drop-link">
                                                                <span class="control--search-drop-name">Москва</span>
                                                                <span class="control--search-drop-val">Россия</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-find-center__item">
                                        <div class="form-layout__field">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="input-shell">
                                                        <input name="email" class="input input--default" placeholder="E-mail*" type="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-find-center__item">
                                        <div class="form-layout__field">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="input-shell">
                                                        <textarea name="comment" class="input input--default" placeholder="Примечание" type="text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-find-center__submit">
                                        <button style="width: 100%" type="submit" disabled="" id="sp-btn" class="btn btn--empty-black btn--hover-primary">
                                            <span class="btn__text ">Отправить</span>
                                        </button>
                                        <button style="width: 100%; display: none;" id="sp-btn-thanks" disabled="" class="btn btn--empty-black btn--hover-primary" href="#modal-form-thanks" data-modal="" data-effect="mfp-move-from-left">
                                            <span class="btn__text ">Отправить</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div style="width: 100%; height: 10px;"></div>
            </div>
        </div>
    </div>
</div>
