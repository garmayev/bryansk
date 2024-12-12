<?php
/**
 * @var $this \yii\web\View
 * @var $products \common\models\Element[]
 */

use yii\helpers\Url;

$this->title = "АО Октябрьское - официальный дилер техники Ростсельмаш в Бурятии";

?>
<script>
    document.querySelector(".header.js-header").classList.add("is-white");
    document.addEventListener("DOMContentLoaded", () => {
        $("[href='#technic-invite']").on("click", (e) => {
            let target = e.target;
            let key = $(e.target).closest(".main-slider-slide").attr("data-key");
            $("[name=PROP_PRODUCT_ID]").val(key);
            console.log(key);
        })
    })
</script>
<style>
    .r-logo {
        display: none;
    }

    .is-menu-open .r-logo {
        display: block;
    }

    .is-menu-open .w-logo {
        display: none;
    }

    .block-slider__img {
        max-width: 100vw;
    }

    .block-slider__wrap {
        display: block;
    }
    .block-slider__slide-content-wrap {
        margin-top: -100px;
    }
    @media screen and (max-width: 800px) {
        .block-slider__slide-content-wrap {
            margin-top: -10px;
        }
    }
</style>

<div class="hero-main">
    <div class="hero-main__wrap">
        <div class="main-slider" data-autoplay="7000">
            <canvas class="main-slider__canvas"></canvas>

            <div class="main-slider__slides">
                <div class="main-slider__slides-overlay"></div>
                <?php
                $branch = \common\models\Branch::findOne(\Yii::$app->session->get('branch'));
                $slider = $branch->getSliders()->andWhere(['is_main' => 1])->one();

                if (isset($slider)) {
                    foreach ($slider->slides as $key => $slide) {
                        $active = ($key === 0) ? 'active' : '';
                        echo "<div data-id='$key' data-src='$slide->image' data-key='{$slide->element->id}' class='main-slider-slide $active has-overlay' title='$slide->title' alt='$slide->title'>
                    <div class='main-slider-slide__content'>
                        <div class='main-slider-slide__main'>
                            <div class='main-slider-slide__title h2'>$slide->title</div>

                            <div class='main-slider-slide__actions'>
                            ";
                        foreach ($slide->actions as $action) {
                            echo "<div class='main-slider-slide__action'>
                                    <a href='$action->href' class='btn btn--primary btn--hover-primary' data-modal='' data-effect='mfp-move-from-left'>
                                        <span class='btn__text'>$action->text</span>
                                    </a>
                                </div>";
                        }

                        echo "</div>
                        </div>

                        <div class='main-slider-slide__fact'>";
                        foreach ($slide->factor_list as $factor) {
                            $num = $factor->heading !== "" ? $factor->heading : "";
                            echo "<div class='main-slider-slide__fact-wrap'>
                                <div class='factor' data-viewport-trigger='' data-animate=''>
                                    <div class='factor__text text-default' data-animate='fade-in-up'
                                         data-animate-delay='1'>$factor->text
                                    </div>
                                    <div class='factor__head'>
                                        <span class='factor__number'>";
                            if ($factor->heading !== "") {
                                echo "<span class='factor__number-value' data-counter=''
                                                  data-counter-separator=' '>
						$num
					    </span>
					</span>

                                        <span class='factor__suffix'>
					    <span style='display: none'>$num</span>
					    $factor->suffix
					</span>";
                            }
                            echo "</div>
                                </div>
                            </div>";
                        }
                        echo "</div>
                    </div>
                </div>
";
                    }

                }
                ?>
            </div>

            <div class="main-slider-controls">
                <div class="main-slider-info">
                    <div class="main-slider-pagination">
                        <div class="main-slider-pagination__wrap">
                            <div data-id="0" class="main-slider-pagination__el active">
                                <div class="main-slider-pagination__el-inner"></div>
                            </div>
                            <div data-id="1" class="main-slider-pagination__el">
                                <div class="main-slider-pagination__el-inner"></div>
                            </div>
                            <div data-id="2" class="main-slider-pagination__el">
                                <div class="main-slider-pagination__el-inner"></div>
                            </div>
                        </div>
                    </div>

                    <div class="main-slider-info__title text-default">
						<span style="color:#d0043c"><a target="_blank"
                                                       href="<?= \yii\helpers\Url::to(['/finance/specials']) ?>">Выгодные
								предложения</a></span>
                    </div>
                </div>

                <div class="main-slider-nav main-slider-nav--autoplay">
                    <div class="nav-arrows nav-arrows--default">
                        <button type="button" class="nav-arrows__button" data-nav-arrow-prev="" title="Назад"
                                aria-label="Назад"></button>
                        <button type="button" class="nav-arrows__button" data-nav-arrow-next="" title="Вперёд"
                                aria-label="Вперёд"></button>
                        <button class="nav-arrows__pause">
                            <i class="icon is-small" aria-hidden="true">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12L9 20L9 4L17 12Z" fill="currentColor"></path>
                                </svg>
                            </i>
                        </button>
                        <span class="nav-arrows__arrow">
							<i class="icon is-small" aria-hidden="true">
								<svg width="24" height="24" stroke="currentColor" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
									<path d="M16 19L9 12L16 5" stroke-width="2" stroke-linecap="square"></path>
								</svg>
							</i>
						</span>
                        <span class="nav-arrows__arrow">
							<i class="icon is-small" aria-hidden="true">
								<svg width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
									<path d="M9.00012 5L16.0001 12L9.00012 19" stroke-width="2" stroke-linecap="square">
									</path>
								</svg>
							</i>
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-32 pt-md-112 pb-40 pb-lg-80 pb-md-64 pb-40 wrapper wrap-pl-1 wrap-pr-1">
    <div class="section-link">
        <div class="section-link__wrap">
            <div class="section-link__content">
                <div class="section-link__col">
                    <ul class="section-link-list" data-animate="">
                        <?php
                        $sections = \common\models\Section::find()->where(['type' => \common\models\Section::TYPE_CATALOG])->andWhere(['parent_id' => null])->all();
                        foreach ($sections as $item) {
                            echo "<li class='section-link-list__el'><a href='" . Url::to(['products/view', 'code' => $item->code]) . "' class='section-link-list__link text-default'>{$item->name}</a></li>";
                        }
                        ?>
                    </ul>
                </div>

                <div class="section-link__col">
                    <div class="section-link__desc text-lead" data-animate-lines="">Продуктовая линейка компании
                        включает в&nbsp;себя более 150 моделей техники
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pb-md-64 pb-40 wrapper wrap-pl-1 wrap-pr-1">
    <div class="events-list">
        <div class="events-list__wrap">
            <div class="events-list__head" data-animate="">
                <div class="events-list__title h2">События Октябрьское</div>
                <div class="events-list__link">
                    <a href="/post/index" class="text-link text-default text-link--underline">Все события</a>
                </div>
            </div>

            <div class="events-list__content">
                <div class="events-list__row">
                    <?php
                    $posts = \common\models\Post::find()->limit(6)->orderBy(['created_at' => SORT_DESC])->all();
                    foreach ($posts as $post) {
                        echo $this->render('_post', [
                            'model' => $post
                        ]);
                    }
                    ?>
                </div>
            </div>

            <div class="events-list__bottom" data-animate="" data-animate-delay="2">
                <a href="<?= \yii\helpers\Url::to(['/post/index']) ?>"
                   class="text-link text-default text-link--underline">Все события</a>
            </div>
        </div>
    </div>
</div>

<div class="pt-2-fixed mt-2-fixed-negative pb-64 wrapper">
    <div id="comp_211be8534e9451ddf16fae65963a34ee">
        <div class="block-slider wrapper wrap-pr-1 wrap-pl-1">
            <div class="block-slider__head animate" data-animate="">
                <h2 class="block-slider__title h2">О компании</h2>
                <div class="block-slider__link">
                    <a href="/site/about/" class="text-link text-default text-link--underline">Подробнее о нас</a>
                </div>
            </div>
            <div class="block-slider__wrap" data-slider-wrap="">
                <!-- Slider main container -->
                <div class="swiper swiper--reviews js-swiper-reviews swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" id="swiper-wrapper-10aa81010e84e36ab3" aria-live="off">
                        <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active swiper-slide-next"
                             role="group" aria-label="1 / 1" data-swiper-slide-index="0"
                             style="opacity: 1; transform: translate3d(0px, 0px, 0px);">

                            <div class="block-slider__slide" id="bx_1373509569_150308">
                                <img class="block-slider__img" alt="" src="/images/336.jpg">
                                <div class="block-slider__slide-content">
                                    <div class="block-slider__slide-content-wrap">
                                        <div class="block-slider__slide-content-head">
                                            <h4 class="block-slider__slide-content-title">Официальный дилер
                                                Ростсельмаш</h4>
                                            <div class="user-text text">
                                                <p>20 лет успешной работы</p>
                                            </div>
                                        </div>
                                        <div class="block-slider__slide-content-text animate" data-animate="">
                                            <div class="user-text">
                                                <p>С 2004 года АО «Октябрьское» является официальным дилером Ростсельмаш
                                                    в Тамбовской и Липецкой областях по поставкам и послепродажному
                                                    обслуживанию крупногабаритной сельскохозяйственной техники,
                                                    прицепному и самоходному оборудованию для всех видов полевых
                                                    работ.</p>
                                                <p>Сейчас это комплексное обслуживание аграриев, так называемый принцип
                                                    одного окна - «ВСЕ ДЛЯ РАБОТЫ В ПОЛЕ»!</p>
                                                <div class="block-slider__slide-content-link">
                                                    <a href="/site/about/"
                                                       class="text-link text-default text-link--underline">Подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-content">
        <div class="tabs-content__el active ">
            <div class="wrapper wrap-pl-1 wrap-pr-1">
                <div class="map-search-box__list">
                    <div class="contacts-table">
                        <div class="contacts-table__top">
                            <div class="contacts-table__heading h2">
                                Контактные данные
                            </div>

                        </div>
                        <div class="contacts-table__table">
                            <?php
                            $branches = \common\models\Branch::find()->all();
                            foreach ($branches as $branch) {
                                $cleanPhone = preg_replace('/[\ \(\)\+\-]/', '', $branch->phone);

                                echo "
                            <p class=\"h3 my-16\">{$branch->region}</p>
                            <div class=\"map-search-box__list-item dealer-map-list-item-js\">
                                <div class=\"map-search-box__head\">
                                    <a href=\"/where-buy/68643/\" class=\"map-search-box__title h4\">{$branch->title}</a>
                                </div>
                                <div class=\"map-search-box__body\">
                                    <div class=\"map-search-box__row\">
                                        <div class=\"map-search-box__label\">
                                            <div class=\"map-search-box__label-ico\">
                                                <svg width='14' height='17' viewBox='0 0 14 17' fill='none'
                                                     xmlns='http://www.w3.org/2000/svg'>
                                                    <path fill-rule='evenodd' clip-rule='evenodd'
                                                          d='M0 6.68985C0 8.92581 1.11665 10.9098 2.30668 12.4059C3.51094 13.9199 4.90213 15.0747 5.69067 15.6747C6.46957 16.2673 7.53048 16.2673 8.30938 15.6747C9.09792 15.0747 10.4891 13.9199 11.6933 12.4059C12.8834 10.9098 14 8.92581 14 6.68985C14 2.97266 10.7744 0.119141 7.00002 0.119141C3.22556 0.119141 0 2.97266 0 6.68985ZM7.00002 8.62244C5.70044 8.62244 4.81267 7.66891 4.81267 6.68988C4.81267 5.71086 5.70044 4.75731 7.00002 4.75731C8.2996 4.75731 9.18731 5.71086 9.18731 6.68988C9.18731 7.66891 8.2996 8.62244 7.00002 8.62244Z'
                                                          fill='#B3B9BD'></path>
                                                </svg>
                                            </div>
                                            <div class='map-search-box__label-text text-link--bold'>{$branch->title}, {$branch->address}</div>
                                        </div>
                                    </div>
                                    <div class='map-search-box__row'>
                                        <div class='map-search-box__label'>
                                            <div class='map-search-box__label-ico'>
                                                <svg width='16' height='17' viewBox='0 0 16 17' fill='none'
                                                     xmlns='http://www.w3.org/2000/svg'>
                                                    <path
                                                            d='M11.4668 11.2183L10.9459 11.9997C10.8419 12.1557 10.7044 12.2888 10.5232 12.3367C9.92955 12.4935 8.35357 12.5643 5.95418 10.165C3.5548 7.76558 3.62562 6.18957 3.78247 5.59595C3.83036 5.41473 3.96343 5.27721 4.11941 5.17324L4.9008 4.65231C5.48256 4.26447 5.63976 3.47845 5.25192 2.89669L3.77613 0.683018C3.43761 0.175236 2.78501 -0.0187664 2.22407 0.221636L1.55833 0.506948C1.0526 0.723692 0.640069 1.11267 0.39401 1.60479C0.188432 2.01595 0.029095 2.44892 0.00750637 2.90811C-0.0605285 4.35515 0.256773 7.92026 4.22783 11.8913C8.19889 15.8624 11.764 16.1796 13.211 16.1116C13.6702 16.09 14.1032 15.9306 14.5144 15.7251C15.0065 15.4791 15.3954 15.0665 15.6122 14.5607L15.8975 13.8951C16.1379 13.3341 15.9439 12.6815 15.4361 12.343L13.2224 10.8672C12.6407 10.4794 11.8547 10.6366 11.4668 11.2183Z'
                                                            fill='#B3B9BD'></path>
                                                </svg>
                                            </div>
                                            <div class='map-search-box__label-text'>
                                                <a href='tel:{$cleanPhone}' class='text-link text-default'>{$branch->phone}</a>
                                            </div>
                                        </div>

                                        <div class='map-search-box__label'>

                                            <div class='map-search-box__label-ico'>
                                                <svg width='16' height='14' viewBox='0 0 16 14' fill='none'
                                                     xmlns='http://www.w3.org/2000/svg'>
                                                    <path fill-rule='evenodd' clip-rule='evenodd'
                                                          d='M14.5111 0.119141H1.48889C0.666594 0.119141 0 0.830003 0 1.7069C0 2.23777 0.248789 2.73352 0.663006 3.028L1.95723 3.94812L6.09817 6.89207C7.24983 7.71083 8.75017 7.71083 9.90183 6.89207L14.0427 3.94812L15.337 3.028C15.7512 2.73352 16 2.23777 16 1.7069C16 0.830003 15.3334 0.119141 14.5111 0.119141ZM0.380949 7.0254C0.380949 6.87652 0.389303 6.72971 0.40552 6.58548C0.485966 5.87005 1.26881 5.65583 1.83102 6.05552L5.14726 8.41317C6.87474 9.64131 9.12526 9.64131 10.8528 8.41317L14.169 6.05552C14.7312 5.65583 15.5141 5.87005 15.5945 6.58548C15.6107 6.72971 15.6191 6.87652 15.6191 7.0254V10.6816C15.6191 12.0279 14.5957 13.1191 13.3334 13.1191H2.66666C1.4043 13.1191 0.380949 12.0279 0.380949 10.6816V7.0254Z'
                                                          fill='#B3B9BD'></path>
                                                </svg>
                                            </div>
                                            <div class='map-search-box__label-text'>
                                                <a href='mailto:{$branch->email}'
                                                   class='text-link text-default'>{$branch->email}</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <style>
        .hero-main, .main-slider {
            top: -12px;
        }

        .map-dealers-list-item.active .active-hide {
            display: none;
        }

        .map-dealers-list {
            display: none;
            z-index: 200;
            position: absolute;
            top: 0;
            bottom: 0;
            width: 200px;
            overflow-x: hidden;
            overflow-y: scroll;
            padding-right: 7px;
        }

        .map-dealers-list-item {
            background: white;
            width: 100%;
            padding: 2.5rem;
            margin-bottom: 2px;
            /*-webkit-box-shadow: 0px 0px 8px 0px rgba(34, 60, 80, 0.2);
                        -moz-box-shadow: 0px 0px 8px 0px rgba(34, 60, 80, 0.2);
                        box-shadow: 0px 0px 8px 0px rgba(34, 60, 80, 0.2);*/
        }

        .map-dealers-list-item-title {
            margin-right: 50px;
            font-size: 1.125rem;
            line-height: 1.4;
            font-weight: 500;
        }

        .map-dealers-list-item-num {
            float: right;
            font-size: 1.125rem;
            line-height: 1.4;
            font-weight: 500;
        }

        .map-dealers-list-item-info {
            display: none;
        }

        .map-dealers-list-item.active .map-dealers-list-item-info {
            display: block;
        }

        /* Firefox */
        .map-dealers-list {
            scrollbar-width: auto;
            scrollbar-color: #d0043c #ffffff;
        }

        /* Chrome, Edge, and Safari */
        .map-dealers-list::-webkit-scrollbar {
            width: 5px;
        }

        .map-dealers-list::-webkit-scrollbar-track {
            background: #ffffff;
        }

        .map-dealers-list::-webkit-scrollbar-thumb {
            background-color: #d0043c;
            border-radius: 10px;
            border: 3px solid #ffffff;
        }

        .map-dealers-list-back-btn {
            display: block;
        }

        /*input__search-results--dealers*/

        .input__search-results.input__search-results--dealers {
            z-index: 1000;
            width: 75%;
            bottom: 0;
            transform: translateY(100%);
        }

        .dealers-map-adaptive .RT_section__location {
            position: relative;
        }

        .dealers-map-adaptive .wrap-pl-1.wrap-pr-1 {

            z-index: 200 !important;

        }

        .map-search-box {
            z-index: 200 !important;
        }

        @media (max-width: 991px) {
            .input__search-results.input__search-results--dealers {
                width: 100%;
            }


        }

        html {
            --rem: 0.0625rem
        }

        .tabs--medium .tabs-list__el {
            font-size: calc(var(--rem) * 18);
            padding-bottom: calc(var(--rem) * 12);
            margin-right: calc(var(--rem) * 68);
            font-weight: 600;
        }

        .tabs--medium .tabs-list__el::after {
            width: 103%;
            left: 50%;
            transform: translateX(-50%);
            display: none;
        }

        .tabs--medium .tabs-list__el.active::after {
            height: 0.25rem;
        }

        .tabs--medium .tabs-list__el:last-child {
            margin-right: 0;
        }

        .tabs--medium .tabs-list {
            width: 100%;
            padding-top: 0;
        }

        .tabs--medium .tabs-content {
            padding: 24px 0;
        }

        .tabs--medium .tabs-content:after {
            display: none;
        }

        .tabs--medium .tabs-content:before {
            display: none;
        }

        .tabs--medium .tabs-content {
            width: 100% !important;
        }

        .map-search-box {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
        }

        .map-search-box__map {
            flex: 1;
            min-width: 0;
            max-width: calc(var(--rem) * 840);
            margin-right: auto;
            padding-right: 16px;
        }

        .map-search-box .tabs__head {
            width: auto;
            flex: 0 auto;

        }

        .map-search-box .RT_section__location {
            margin-top: 0 !important;
        }

        .map-search-box .RT_form {
            width: 100%;
            padding: 2.5rem 2rem 2.5rem 2rem;
        }

        .map-search-box .RT_form .btn {
            padding: .8125rem 4rem;
        }

        .map-search-box .RT_form__field {
            position: relative;
            width: 100%;
            margin-right: 0;
        }

        .map-wrap .map-dealers-list::-webkit-scrollbar {
            height: 0px;
            width: 0px;
            background: #000;
        }

        .map-wrap .map-dealers-list::-webkit-scrollbar-thumb {
            background: #fff;
            -webkit-border-radius: 1ex;
            -webkit-box-shadow: 0px 0 0px rgba(0, 0, 0, 0);
        }

        .map-wrap .map-dealers-list::-webkit-scrollbar-corner {
            background: #000;
        }

        .map-search-box__list {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .map-search-box__list-item {
            padding: 24px 28px;
            background: rgba(239, 239, 242, 1);
        }

        .map-search-box__head {
            margin-bottom: calc(var(--rem) * 16);
        }

        .map-search-box__row {
            display: flex;
            flex-wrap: wrap;
            gap: calc(var(--rem) * 16);
        }

        .map-search-box__row:not(:last-child) {
            margin-bottom: calc(var(--rem) * 23);
        }

        .map-search-box__row--gap {
            margin-top: calc(var(--rem) * 32);
            gap: calc(var(--rem) * 8);
        }

        .map-search-box__btn {
            color: #101010;
            font-size: calc(var(--rem) * 16);
            font-style: normal;
            font-weight: 500;
            line-height: 100%;
            padding: calc(var(--rem) * 8) calc(var(--rem) * 16);
            background: #E1E1E1;

        }

        .map-search-box__label {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .map-search-box__label-ico {
            margin-right: calc(var(--rem) * 8);
            display: flex;
        }

        .map-search-box__label-text {
            color: #101010;
            font-size: calc(var(--rem) * 15);
            font-style: normal;
            font-weight: 400;
            line-height: 100%;
            flex: 1;
            min-width: 0;
        }

        .map-search-box__label-text a,
        a.map-search-box__label-text {
            font-size: calc(var(--rem) * 15) !important;
        }

        .text-link--bold {
            font-weight: 500;
        }

        .map-wrap {
            position: relative;
        }

        .map-dealers-list {
            position: absolute;

            left: 0;
            top: 0;
            z-index: 200;
        }

        @media (max-width: 1199px) {
            .map-search-box__map {
                flex: 1 0 100%;
                width: 100%;
                max-width: 100%;
                padding-right: 0;
                padding-bottom: calc(var(--rem) * 15);
            }

            .tabs--medium .tabs-list__el {
                font-size: calc(var(--rem) * 16);
                padding-bottom: calc(var(--rem) * 8);
                margin-right: calc(var(--rem) * 28);
                font-weight: 600;
            }
        }

        @media (max-width: 639.98px) {
            .map-search-box .tabs__head {
                width: 100%;
            }
        }

        .js-rt-show-all-dealers {
            display: none;
        }
    </style>

    <script>
        function marginTopCalc() {
            let marginTop = $('.RT_section__location').height() / 2;
            let widthList = $('.RT_form.search_dealers').width() / 2;
            $('.RT_section__location').css({'margin-top': '-' + marginTop + 'px'});
            $('.map-dealers-list').css({'top': (marginTop + 50) + 'px', 'width': widthList + 'px', 'display': 'block'});
        }

        $(document).ready(function () {
            setTimeout(function () {
                marginTopCalc();
            }, 1000);
        })
        $(window).resize(function () {
            setTimeout(function () {
                marginTopCalc();
            }, 100);
        })
    </script>

    <div class="modal mfp-hide mfp-with-anim modal--feedback" id="form-invite">
        <button title="Close (Esc)" type="button" class="mfp-close">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
            </svg>
        </button>
        <div class="modal__content bg-white">
            <div class="modal__scroll-wrapper js-perfect-scrollbar">
                <h3 class="modal__head h3">Получить приглашение</h3>
                <div class="modal__body">
                    <div class="modal__left">
                        <form name="invite-form" action="#" method="POST" class="form-layout js-validate"
                              id="invite-form"
                              data-parsley-validate="">
                            <div class="form-layout__items">
                                <div class="form-layout__item">
                                    <div class="form-layout__field">
                                        <div class="field">
                                            <div class="control">
                                                <div class="input-shell">
                                                    <input id="88335671NAME" name="PROP_NAME"
                                                           class="input input--default"
                                                           placeholder="Имя" type="text" required=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-layout__item">
                                    <div class="form-layout__field">
                                        <div class="field">
                                            <div class="control">
                                                <div class="input-shell">
                                                    <input id="88335671PHONE" name="PROP_PHONE"
                                                           class="input input--default"
                                                           placeholder="Телефон" type="text" required=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-layout__item">
                                    <div class="form-layout__field">
                                        <div class="field">
                                            <div class="control">
                                                <div class="input-shell">
                                                    <input id="88335671EMAIL" name="PROP_EMAIL"
                                                           class="input input--default"
                                                           placeholder="Email" type="email" data-parsley-type="email"
                                                           inputmode="email" required="" data-parsley-trigger="change"/>
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
                                                    <input id="88335671FORM_IBLOCK" name="FORM_IBLOCK"
                                                           class="input input--default" type="hidden" value="419"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-layout__actions">
                                <div class="form-layout__action">
                                    <button type="submit" class="btn btn--gray btn--hover-red">
                                        <span class="btn__text">Отправить</span>
                                    </button>
                                </div>
                                <div class="form-layout__privacy">
                                    <div class="field theme-primary">
                                        <div class="control">
                                            <label class="checkbox checkbox--primary">
                                                <input type="checkbox" class="checkbox__input"
                                                       name="application-form-privacy"
                                                       id="88335671application-form-privacy"
                                                       required=""/>

                                                <span class="checkbox__box"></span>

                                                <span class="checkbox__inner">
												<i class="icon is-small" aria-hidden="true">
													<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<rect x="1" y="1" width="22" height="22" fill="#212121"
                                                              stroke="#212121" stroke-width="2"></rect>
														<path d="M5 12L9.66667 17L19 7" stroke="white" stroke-width="2">
														</path>
													</svg>
												</i>
											</span>

                                                <span class="checkbox__text">
												Нажимая «Отправить» , Вы соглашаетесь с <a
                                                            href="privacy-policy/index.htm" class="">Политикой
													конфиденциальности</a> и
												<a href="terms-of-use/index.htm" class="">обработкой персональных
													данных</a>
											</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.button-top').click(function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });

            setTimeout(function () {
                let $btn = $('.location__closer > button');
                if ($btn.length) {
                    $btn.trigger('click');
                }
            }, 30000)
        })
    </script>
