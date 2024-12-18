<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О Нас';
$this->params['breadcrumbs'][] = ['label' => 'Главная', 'url' => ['/site/index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile("/js/script.js");
?>
<script src="https://api-maps.yandex.ru/2.1/?apikey=bc709e46-0fb9-47fe-89f5-c75b3164cdfe&lang=ru_RU"
        type="text/javascript"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        setTheme("white");
    });
</script>
<style>
    @media (max-width: 989.98px) {
        .slider-story__content {
            padding-bottom: 70px;
        }
    }

</style>
<div class="hero-main">
    <div class="hero-main__wrap">
        <div class="main-slider main-slider--not-slider">
            <canvas class="main-slider__canvas main-slider__canvas--loaded" width="1866" height="1044"></canvas>
            <div class="main-slider__slides">
                <div class="main-slider__slides-overlay"></div>
                <div data-id="0" data-src="/images/997.jpg"
                     class="main-slider-slide active" title="О компании" alt="О компании">
                    <div class="main-slider-slide__content">
                        <div class="main-slider-slide__main">
                            <div class="main-slider-slide__title h2">О компании</div>
                            <div class="main-slider-slide__text" style="margin-top: 1rem;">
<p>ООО «Агропромсервис» является официальным сертифицированным дилером «Ростсельмаш» с 2003 года.</p>
<p>В год продаётся порядка 200 единиц комбайнов, тракторов. Сельхозпроизводители, заручившиеся поддержкой «Агропромсервис», имеют возможность в одной компании получить полный набор инструментов для ведения сельхозбизнеса</p>
                            </div>
                            <div class="main-slider-slide__actions">
                                <div class="main-slider-slide__action ">
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-slide__fact">
                            <div class="main-slider-slide__fact-wrap">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__text text-default animate" data-animate="fade-in-up"
                                         data-animate-delay="1">
                                    </div>
                                    <div class="factor__head">
                                        <span class="factor__number">
                                            <span class="factor__number-value animate" data-counter=""
                                                  data-counter-separator=" ">3</span>
                                        </span>
                                        <span class="factor__suffix">
                                            <span style="display: none">3</span> региона присутствия
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-slide__fact-wrap">
                                <div class="factor animate" data-viewport-trigger="" data-animate="">
                                    <div class="factor__text text-default animate" data-animate="fade-in-up"
                                         data-animate-delay="1">
                                    </div>
                                    <div class="factor__head">
                                        <span class="factor__number">
                                            <span class="factor__number-value animate" data-counter=""
                                                  data-counter-separator=" ">22</span>
                                        </span>
                                        <span class="factor__suffix">
                                            <span style="display: none">22</span> года успешной работы
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider-controls">
                <div class="main-slider-info">
                    <div class="main-slider-info__title text-default">Агротехника Профессионалов</div>
                </div>
                <div class="main-slider-nav hidden main-slider-nav--autoplay white">
                    <div class="nav-arrows nav-arrows--default">
                        <button type="button" class="nav-arrows__button" data-nav-arrow-prev="" title="Назад"
                                aria-label="Назад"></button>
                        <button type="button" class="nav-arrows__button" data-nav-arrow-next="" title="Вперёд"
                                aria-label="Вперёд"></button>
                        <button class="nav-arrows__pause">
                            <i class="icon is-small" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12L9 20L9 4L17 12Z" fill="currentColor"></path>
                                </svg>
                            </i>
                        </button>
                        <span class="nav-arrows__arrow">
                            <i class="icon is-small" aria-hidden="true">
                                <svg width="24" height="24" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 19L9 12L16 5" stroke-width="2" stroke-linecap="square"></path>
                                </svg>
                            </i>
                        </span>
                        <span class="nav-arrows__arrow">
                            <i class="icon is-small" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.00012 5L16.0001 12L9.00012 19" stroke-width="2"
                                          stroke-linecap="square"></path>
                                </svg>
                            </i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrap-pl-1 wrap-pr-1 mt-56 mt-md-80 mt-lg-96 mb-72 " style="margin-top: 20px !important;">
    <div class="general-description">
        <div class="general-description__wrap">
            <div class="general-description__content general-description__content--factor ">
                <div class="general-description__title h2" data-animate-lines="">Компания сегодня</div>
                <div class="general-description__left">
                    <ul class="general-description__factor-list">
                        <li class="general-description__factor">
                            <div class="factor animate" data-viewport-trigger="" data-animate="">
                                <div class="factor__text text-default animate" data-animate="fade-in-up"
                                     data-animate-delay="1">Поставляем свыше
                                </div>
                                <div class="factor__head">
						    <span class="factor__number">
							<span class="factor__number-value" data-counter="">200</span>
						    </span>
                                    <span class="factor__suffix">
							<span style="display: none">0</span>
							единиц техники в год</span>
                                </div>
                            </div>
                        </li>
                        <li class="general-description__factor">
                            <div class="factor animate" data-viewport-trigger="" data-animate="">
                                <div class="factor__text text-default animate" data-animate="fade-in-up"
                                     data-animate-delay="1">&nbsp;
                                </div>
                                <div class="factor__head">
						    <span class="factor__number">
							<span class="factor__number-value" data-counter="">22</span>
						    </span>
                                    <span class="factor__suffix">
							<span style="display: none">0</span>
							года успешной работы
                                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="general-description__factor">
                            <div class="factor animate" data-viewport-trigger="" data-animate="">
                                <div class="factor__text text-default animate" data-animate="fade-in-up"
                                     data-animate-delay="1">
                                </div>
                                <div class="factor__head">
						    <span class="factor__number">
							<span class="factor__number-value" data-counter="">3</span>
						    </span>
                                    <span class="factor__suffix">
							<span style="display: none">0</span>
							региона присутствия в Курске, Брянске и Орле
						    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="general-description__right general-description__right--wide">
                    <div class="general-description__description user-text">
<p>Агпропромсервис – это забота о своих клиентах. Мы, как никто другой, знаем, что агробизнес нуждается в надежной и своевременной поддержке. Поэтому, наша компания предлагает современную сельскохозяйственную технику, комплексное послепродажное обслуживание, качественный ремонт и поставку оригинальных запасных частей. </p>
<br />
<p>Работая с нами, Вы можете быть уверенны в том, что наши специалисты готовы оперативно решить любые возникающие проблемы, минимизируя простои и обеспечивая бесперебойную работу вашей техники, как в сезон, так в любое время. </p>
<br />
<p>Аграрии и хозяйства выбирают нас за высокий профессионализм, который заключается: </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider-history-company" id="bx_651765591_150229">
    <div class="mb-lg-160 mb-md-96 mb-80 mt-lg-96 sadsad">
        <div class="slider-story wrapper wrap-pr-1 wrap-pl-1">
            <div class="slider-story__wrap">
                <div class="slider-story__heading mb-lg-48 mb-md-40 mb-32">
                    <h2></h2>
                </div>
                <div class="slider-story__base">
                    <!-- Slider main container -->
                    <div class="swiper js-swiper-story swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper" id="swiper-wrapper-f63f4c898b1cc5d2" aria-live="polite">
                            <!-- Slides -->
                            <div class="swiper-slide slider-story__slide swiper-slide-active" data-year="default"
                                 data-href-button="#default" role="group" aria-label="1 / 1">
                                <div class="slider-story__content">
                                    <div class="slider-story__info animate" data-animate="">
                                        <div class="user-text">
                                            <ul>
                                                <li>Индивидуальный подход Мы внимательно изучаем потребности каждого
                                                    клиента и предлагаем решения, которые
                                                    максимально соответствуют их требованиям.
                                                </li>
                                                <li>Высокое качество обслуживания Наши специалисты регулярно проходят
                                                    обучение и сертификацию, чтобы быть
                                                    в курсе последних технологий и методов обслуживания.
                                                </li>
                                                <li>Оперативность и надежность Мы ценим ваше время и стремимся к тому,
                                                    чтобы все вопросы решались максимально
                                                    быстро и эффективно.
                                                </li>
                                                <li>Поддержка на всех этапах От консультации и выбора техники до ее
                                                    эксплуатации и обслуживания — мы всегда
                                                    рядом, чтобы помочь вам достичь наилучших результатов.
                                                </li>
                                                <p class="mt-40">Агропромсервис – официальный дилер Ростсельмаш. Мы 
                                                    надежный партнер, который заботится о вашем успехе. Мы стремимся 
                                                    к долгосрочному сотрудничеству и готовы вместе добиваться высоких 
                                                    успехов в агропромышленном деле и сельском хозяйстве!</p>
                                        </div>
                                    </div>
                                    <div class="slider-story__image">
                                        <img class="image is-cover" src="/images/999.jpg" alt="image">
                                    </div>
                                        <a href="/site/certificate" class="btn btn--primary btn--hover-primary" style="position: absolute; right: 0; bottom: 0px;">
                                            <span class="btn__text">Наши сертификаты</span>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-lg-160 mb-md-96 mb-80">
    <div class="operation-list">
        <div class="wrapper wrap-pl-1 wrap-pr-1">
            <div class="operation-list__head animate" data-animate="">
                <div class="operation-list__left">
                    <div class="operation-list__title h2">Техника для любой агрооперации</div>
                </div>
                <div class="operation-list__right">
                    <p class="operation-list__text text-default">Обладаем всем спектром новейших технологий для
                        полного цикла выпуска наиболее сбалансированной и эффективной продукции</p>
                </div>
            </div>
            <ul class="operation-list__list">
                <li class="operation-list__item animate" data-animate="">
                    <div class="operation-list__item-marker animate" data-animate="">
                        <div class="operation-list__item-square" style="transition-delay: 0.25s"></div>
                        <div class="operation-list__item-dotted" style="transition-delay: 0.25s"></div>
                    </div>
                    <span class="operation-list__item-text h5 animate" data-animate="" data-animate-delay="1">Обработка почвы</span>
                </li>
                <li class="operation-list__item animate" data-animate="">
                    <div class="operation-list__item-marker animate" data-animate="">
                        <div class="operation-list__item-square" style="transition-delay: 0.5s"></div>
                        <div class="operation-list__item-dotted" style="transition-delay: 0.5s"></div>
                    </div>
                    <span class="operation-list__item-text h5 animate" data-animate=""
                          data-animate-delay="2">Посев</span>
                </li>
                <li class="operation-list__item animate" data-animate="">
                    <div class="operation-list__item-marker animate" data-animate="">
                        <div class="operation-list__item-square" style="transition-delay: 0.75s"></div>
                        <div class="operation-list__item-dotted" style="transition-delay: 0.75s"></div>
                    </div>
                    <span class="operation-list__item-text h5 animate" data-animate="" data-animate-delay="3">Удобрение почвы</span>
                </li>
                <li class="operation-list__item animate" data-animate="">
                    <div class="operation-list__item-marker animate" data-animate="">
                        <div class="operation-list__item-square" style="transition-delay: 1s"></div>
                        <div class="operation-list__item-dotted" style="transition-delay: 1s"></div>
                    </div>
                    <span class="operation-list__item-text h5 animate" data-animate="" data-animate-delay="4">Уборка урожая</span>
                </li>
                <li class="operation-list__item animate" data-animate="">
                    <div class="operation-list__item-marker animate" data-animate="">
                        <div class="operation-list__item-square" style="transition-delay: 1.25s"></div>
                        <div class="operation-list__item-dotted" style="transition-delay: 1.25s"></div>
                    </div>
                    <span class="operation-list__item-text h5 animate" data-animate=""
                          data-animate-delay="5">Покос</span>
                </li>
                <li class="operation-list__item animate" data-animate="">
                    <div class="operation-list__item-marker animate" data-animate="">
                        <div class="operation-list__item-square" style="transition-delay: 1.5s"></div>
                    </div>
                    <span class="operation-list__item-text h5 animate" data-animate="" data-animate-delay="6">Подготовка валков</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=" mb-80">
    <div class="map-box" data-map-box="" data-map-network=""
         data-url="/local/templates/.default/components/uplab.core/template.block/map-box/networkMapData.php">
        <div class="wrapper wrap-pr-1 wrap-pl-1 mb-lg-64 mb-md-56 mb-32">
            <div class="map-box__top animate" data-animate="">
                <h2 class="map-box__heading">Наш адрес</h2>
                <p class="map-box__description text-default">Работаем на территории Курской, Брянской и Орловской областей</p>
            </div>
        </div>
        <div class="map-box__container animate" data-animate="">
            <div class="map-box__frame " id="rt-yandex-map-custom" style=""></div>
        </div>
    </div>
</div>
<?php
$branches = \common\models\Branch::find()->all();
$this->registerJsVar('models', $branches);
?>
<script>
    ymaps.ready(init);

    function init() {
        let centerLat = 0.0, centerLong = 0.0;
        models.map(model => {
            centerLat += model.latitude
            centerLong += model.longitude
        })
        console.log(models)

        const myMap = new ymaps.Map("rt-yandex-map-custom", {
            center: [centerLat / models.length, centerLong / models.length],
            zoom: 8,
            controls: ['zoomControl'],
        });

        let cluster = new ymaps.Clusterer({
            clusterIcon: [
                {
                    href: '/dist/img/map-icon/001.svg',
                    size: [76, 43],
                    offset: [-8, -42]
                }
            ]
        }), placemarks = [];
        models.map(model => {
            placemarks.push(new ymaps.Placemark([model.latitude, model.longitude], {
                balloonContentHeader: model.title,
                balloonContentBody: `<p>${model.address}</p><p>Телефон: ${model.phone}</p>`
            }, {
                iconLayout: 'default#imageWithContent',
                iconImageHref: model.type ? '/dist/img/map-icon/001.svg' : '/dist/img/map-icon/003.svg',
                iconImageSize: [76, 43],
                iconImageOffset: [-8, -42],
                interactiveZIndex: true,
            }))
        })

        cluster.add(placemarks);
        myMap.geoObjects.add(cluster);
        console.log("Placemark added")
    }
</script>
