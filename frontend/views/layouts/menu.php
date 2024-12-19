<?php

use common\models\Config;

/**
 * @var View $this
 */

$logoWhite = Config::find()->where(['title' => 'logo_white'])->one();
$logoRed = Config::find()->where(['title' => 'logo_red'])->one();
$this->registerJs(<<<JS
    var y,
        i = document.querySelector(".header"),
        o = document.querySelector("body"),
        v = document.querySelector(".hero-main")
        w = window.pageYOffset;
    window.addEventListener( "scroll", function () {
        y = v ? v.offsetHeight : 300;
        var t = window.pageYOffset;
        if (t < w && t > i.offsetHeight) {
            i.classList.add("is-transformed");
            o.classList.add("header-is-transformed");
            var n = i.querySelector("[data-role-list]");
            n && e(n).slideUp(0);
        } else i.classList.remove("is-transformed") 
        o.classList.remove("header-is-transformed");
        if (window.pageYOffset > y) {
            i.classList.add("is-fixed");
            var r = i.querySelector("[data-role-list]");
            r && e(r).slideUp(0);
        } else document.body.classList.contains("js-locked") || i.classList.remove("is-fixed");
    })
JS);
?>
<div class="header-overlay"></div>
<style>
    .logo-white a img:first-child, .logo-red a img:first-child {
        width: 200px;
    }
    .r-logo {
        display: none;
    }
    .is-menu-open .r-logo {
        display: block;
    }
    .is-menu-open .w-logo {
        display: none;
    }
    .header__logo {
        display: none;
    }
    .logo-red .n-logo-t {
        display: none;
    }
    .n-logo-t {
        gap: 0;
        float: left;
        align-items: start;
    }
    .n-logo-t a img {
    //            margin-top: -30px;
        width: 200px;
        float: left;
    }
    .header-nav__search {
        margin-right: 40px;
        margin-left: 0;
    }
    .header-nav__pin { display: none; }
    @media only screen and (max-device-width: 480px) {
        .n-logo-t a img {
            margin-top: 0;
            width: 150px;
        }
        .header-nav__search {
            margin-left: 40px;
            margin-right: 0;
        }
        .header-nav__pin { display: block; }
    }
</style>
<header class="header js-header is-white" data-scroll-lock-fill-gap="">
    <div class="header-wrapper wrapper wrap-pl-1 wrap-pr-1">
        <div class="header__top header-top">
            <div class="header-top__left">
                <div class="header-top__client-location header-top__item">
                    <span class="n-h link-action header__link link-action--line-animate-in">
                        <span class="link-action__text">Официальный дилер</span>
                        <a href="https://rostselmash.com" target="_blank"><img class="w-logo" src="/images/rsm-logo-text.svg" alt=""></a>
                        <a href="https://rostselmash.com" target="_blank"><img class="r-logo" src="/images/rsm-logo-text-red.svg" alt=""></a>
                    </span>
                </div>
            </div>
            <div class="header-top__right">
                <a href="/site/about" class="link-action header-top__item">
                    <span class="link-action__text">О Нас</span>
                </a>
                <a href="/site/contact" class="link-action header-top__item">
                    <span class="link-action__text">Контакты</span>
                </a>
                <a href="/post/index" class="link-action header-top__item">
                    <span class="link-action__text">Новости</span>
                </a>
                <a href="#modal-region" class="modal-region link-action header-top__item" data-modal="" data-effect="mfp-move-from-left">
                    <i class="icon is-small link-action__icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.62036 6.66688C2.62036 8.5952 3.5884 10.3062 4.62006 11.5965C5.66405 12.9022 6.8701 13.8981 7.5537 14.4155C8.22894 14.9266 9.14866 14.9266 9.8239 14.4155C10.5075 13.8981 11.7135 12.9022 12.7575 11.5965C13.7892 10.3062 14.7572 8.5952 14.7572 6.66688C14.7572 3.46112 11.9609 1.00021 8.6888 1.00021C5.41665 1.00021 2.62036 3.46112 2.62036 6.66688ZM8.6888 8.33357C7.56217 8.33357 6.79255 7.51123 6.79255 6.6669C6.79255 5.82258 7.56217 5.00023 8.6888 5.00023C9.81543 5.00023 10.585 5.82258 10.585 6.6669C10.585 7.51123 9.81543 8.33357 8.6888 8.33357Z"></path>
                        </svg>
                    </i>
                    <?php
                    $branch = \common\models\Branch::findOne(\Yii::$app->session->get('branch'));
                    ?>
                    <span class="link-action__text"><?= $branch->city ?></span>
                </a>
                <a href="https://blog.rostselmash.com/" class="link-action header-top__item">
                    <span class="link-action__text">Блог Ростсельмаш</span>
                </a>
                <a href="https://agrotronic.rostselmash.com/cas/login?service=https://%3A%2F%2Fargotronic.rostselmash.com" class="link-action header-top__item">
                    <span class="link-action__text">РСМ Агротроник</span>
                </a>
            </div>
        </div>
        <div class="header__wrap">
            <a class="header__logo">
                <span class="logo-white">
                    <div class="n-logo-t">
                        <a href="/"><img src="<?= $logoWhite->value ?>" alt=""/></a>
                    </div>
                </span>
                <span class="logo-red">
                    <div class="n-logo-t">
                        <a href="/"><img src="<?= $logoRed->value ?>" alt=""/></a>
                    </div>
                </span>
            </a>
            <nav class="header__nav header-nav">
                <?php

                use common\models\Section;
                use yii\helpers\Html;
                use yii\helpers\Url;
                use yii\web\View;

                $sections = \common\models\Section::find()->where(['parent_id' => null])->orderBy(['sort' => SORT_ASC])->all();
                ?>
                <ul class="header-nav__toggles">
                    <li class="header-nav__burger">
                        <button type="button" class="header-burger" data-menu-toggle="" aria-label="Меню"
                                title="Меню">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                    <li class="header-nav__search">
                        <a href="search/index.htm" class="header-nav__search-link" aria-label="Поиск"
                           data-search-button="">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                <circle cx="11" cy="11" r="8" stroke-width="2"></circle>
                                <path d="M16.5 16L21.5 21" stroke-width="2"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="header-nav__pin">
                        <a href="#modal-region" class="link-action header-top__item" data-modal="" data-effect="mfp-move-from-left">
                            <i class="icon is-small link-action__icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.62036 6.66688C2.62036 8.5952 3.5884 10.3062 4.62006 11.5965C5.66405 12.9022 6.8701 13.8981 7.5537 14.4155C8.22894 14.9266 9.14866 14.9266 9.8239 14.4155C10.5075 13.8981 11.7135 12.9022 12.7575 11.5965C13.7892 10.3062 14.7572 8.5952 14.7572 6.66688C14.7572 3.46112 11.9609 1.00021 8.6888 1.00021C5.41665 1.00021 2.62036 3.46112 2.62036 6.66688ZM8.6888 8.33357C7.56217 8.33357 6.79255 7.51123 6.79255 6.6669C6.79255 5.82258 7.56217 5.00023 8.6888 5.00023C9.81543 5.00023 10.585 5.82258 10.585 6.6669C10.585 7.51123 9.81543 8.33357 8.6888 8.33357Z"></path>
                                </svg>
                            </i>
                        </a>
                    </li>
                </ul>
                <div class="header-nav__search-box" data-search-box="https://rostselmash.com/search/serch-ajax.php">
                    <form action="https://rostselmash.com/search/" name="search-box" id="search-box">
                        <div class="field">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="search-box-input" name="q" class="input input--default"
                                           placeholder="Введите поисковый запрос" type="text" autocomplete="off"
                                           data-search-box-field=""/>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="link-action hidden" data-search-box-clear="">
                            <i class="icon is-small link-action__icon" aria-hidden="true">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                                    <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                                </svg>
                            </i>
                        </button>
                        <input type="submit" class="hidden"/>
                    </form>
                    <div class="header__search-box-results" data-search-box-results="">
                        <div class="search-box-result-list"></div>
                    </div>
                </div>
                <ul class="header-nav__menu">
                    <li class="header-nav__item text-default">
                        <a href="/products/" class="header-nav__link header-nav__link--level-0"
                           data-submenu-id="1">
                            Сельхозтехника
                            <span class="header-nav__link-arrow">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00008 9.99994L3.66675 5.66669L12.3334 5.66669L8.00008 9.99994Z"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="header-nav__item text-default">
                        <a href="/systems/" class="header-nav__link header-nav__link--level-0" data-submenu-id="14">
                            Точное земледелие
                            <span class="header-nav__link-arrow">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00008 9.99994L3.66675 5.66669L12.3334 5.66669L8.00008 9.99994Z"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="header-nav__item text-default">
                        <a href="/parts/index" class="header-nav__link header-nav__link--level-0"
                           data-submenu-id="98">
                            Запчасти и сервис
                            <span class="header-nav__link-arrow">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00008 9.99994L3.66675 5.66669L12.3334 5.66669L8.00008 9.99994Z"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="header-nav__item text-default">
                        <a href="/finance/specials" class="header-nav__link header-nav__link--level-0">
                            Акции
                        </a>
                    </li>
                    <li class="header-nav__item text-default">
                        <a href="/finance/index" class="header-nav__link header-nav__link--level-0"
                           data-submenu-id="99">
                            Финансирование
                            <span class="header-nav__link-arrow">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
									<path d="M8.00008 9.99994L3.66675 5.66669L12.3334 5.66669L8.00008 9.99994Z"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-nav__dropdown">
            <ul class="header-nav__submenu header-nav__submenu--level-1" data-id="99">
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/finance/rsm" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Программа лизинга Ростсельмаш Финанс
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/finance/leasing" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Лизинг
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/finance/index" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Кредитование
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/finance/insurance" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Страхование
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/finance/specials" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Акции
                    </a>
                </li>
            </ul>
            <ul class="header-nav__submenu header-nav__submenu--level-1 is-open" data-id="98">
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/parts/spares/" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Оригинальные запчасти и сервис
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/parts/qr" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Заявка на ремонт
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="https://rostselmash.com/spare-parts/checking-originality-parts/" target="_blank" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Проверка оригинальности деталей
                    </a>
                </li>
                <li class="header-nav__submenu-item header-nav__submenu-item--level-1 text-default">
                    <a href="/parts/oil" class="header-nav__submenu-link header-nav__submenu-link--level-1">
                        Масло Ростсельмаш G-PROFI
                    </a>
                </li>
            </ul>
            <ul class="header-nav__submenu header-nav__submenu--level-1" data-id="1">
                <?php
                $elements = [];
                $index = 1;
                foreach (Section::find()->where(['parent_id' => null])->andWhere(['type' => Section::TYPE_CATALOG])->andWhere(['<>', 'id', 1305])->orderBy(['sort' => SORT_ASC])->all() as $key => $item) {
                    $level = $item->parent_id + 1;
                    echo Html::tag(
                        'li',
                        Html::a($item->name, ['/products/view', 'code' => $item->code], [
                            'class' => "header-nav__submenu-link header-nav__submenu-link--level-{$level}",
                            'data' => [
                                'submenu-id' => $index,
                                'level' => $level
                            ]
                        ]),
                        [
                            'class' => "header-nav__submenu-item header-nav__submenu-item--level-{$level} text-default",
                        ]
                    );
                    $data = [];
                    foreach ($item->child as $i) {
                        $data = array_merge($data, $i->elements);
                    }
                    $elements[] = [
                        'key' => $index,
                        'level' => $level,
                        'elements' => $data,
                    ];
                    $index++;
                }
                ?>
            </ul>
            <ul class="header-nav__submenu header-nav__submenu--level-1" data-id="14">
                <?php
                foreach (Section::find()->where(['parent_id' => null])->andWhere(['type' => Section::TYPE_ELECTRONIC_SYSTEM])->orderBy(['sort' => SORT_ASC])->all() as $key => $item) {
                    $level = $item->parent_id + 1;
                    echo Html::tag(
                        'li',
                        Html::a($item->name, ['/systems/view', 'code' => $item->code], [
                            'class' => "header-nav__submenu-link header-nav__submenu-link--level-{$level}",
                            'data' => [
                                'submenu-id' => $index,
                                'level' => $level
                            ]
                        ]),
                        [
                            'class' => "header-nav__submenu-item header-nav__submenu-item--level-{$level} text-default",
                        ]
                    );
                    $data = [];
                    if (count($item->child)) {
                        foreach ($item->child as $i) {
                            $data = array_merge($data, $i->elements);
                        }
                    }
                    $data = array_merge($data, $item->elements);
                    $elements[] = [
                        'key' => $index,
                        'level' => $level,
                        'elements' => $data,
                    ];
                    $index++;
                }

                ?>
            </ul>
            <?php
            foreach ($elements as $element) {
                $subLevel = $element['level'] + 1;
                echo Html::beginTag('ul', [
                    'class' => "header-nav__submenu header-nav__submenu--level-{$subLevel}",
                    'data' => [
                        'id' => $element['key'],
                        'animate' => '',
                    ]
                ]);

                foreach ($element['elements'] as $key => $item) {
                        if ($key < 10) {
                            $url = ($item->type === Section::TYPE_CATALOG) ?
                                Url::to(['/products/element', 'code' => $item->code, 'parent' => $item->section->code]) :
                                Url::to(['/systems/element', 'code' => $item->code, 'parent' => $item->section->code]);
                            echo Html::tag(
                                'li',
                                Html::a(
                                        $item->name,
                                        $url,
                                        [
                                            'class' => "header-nav__submenu-link header-nav__submenu-link--level-$subLevel"
                                        ]
                                ),
                                ['class' => "header-nav__submenu-item header-nav__submenu-item--level-$subLevel"]
                            );
                        }
                }
                echo Html::endTag('ul');
            }
            ?>
        </div>
    </div>

</header>
<script>
/*    let over;
    let target;

    function is_cursor_on_elem(ev, elem) {

        let mouseX = ev.clientX
        let mouseY = ev.clientY
        let rect = elem.getBoundingClientRect()

        return (
            mouseX > rect.x && mouseX < rect.bottom
            &&
            mouseY > rect.y && mouseY < rect.right
        )
    }

    document.querySelectorAll(".header-nav__link--level-0").forEach((item) => {
        let timer;
        const id = item.getAttribute("data-submenu-id");
        item.addEventListener("mouseover", (e) => {
            timer = setTimeout(() => {
                document.querySelectorAll(".header-nav__submenu--level-1.is-open").forEach((a) => {
                    a.classList.remove("is-open", "animate")
                })
                const b = document.querySelector(".header-nav__submenu--default");
                const c = document.querySelector(".header-nav__dropdown");
                const d = document.querySelector(`.header-nav__submenu[data-id="${id}"]`);
                if (d) {
                    over = true;
                    // d && b.classList.add("is-open")
                    d && c.classList.add("is-open")
                    d && d.classList.add("is-open")
                } else {
                    document.querySelectorAll('.is-open').forEach((item) => {
                        item.classList.remove('is-open');
                    })
                }
            }, 200)
        })
        item.addEventListener("mouseout", () => {
            if (!over) {
                const c = document.querySelector(".header-nav__dropdown")
                clearTimeout(timer)
                c.classList.remove("is-open", "animate")
            }
        })
    })
    document.querySelectorAll(".header-nav__submenu-link--level-1").forEach((item) => {
        let t;
        item.addEventListener("mouseover", (e) => {
            const id = e.target.getAttribute("data-submenu-id");
            let activeItem = e.target
            t = setTimeout(() => {
                document.querySelector(".is-active")?.classList.remove("is-active")
                document.querySelectorAll(".header-nav__submenu--level-2.is-open")?.forEach((a) => {
                    a.classList.remove("is-open")
                })
                const l = Number.parseInt(activeItem.getAttribute('data-level')) + 1;
                const b = document.querySelector(`.header-nav__submenu.header-nav__submenu--level-${l}[data-id="${id}"]`);
                if (b) {
                    if (!b.classList.contains("is-open")) {
                        b.classList.add('is-open');
                        console.log(b);
//                        b.classList.add('text-lead')
                    }
                    activeItem.classList.add("is-active")
                }
            }, 200)
        })

        item.addEventListener("mouseout", () => {
            clearTimeout(t);
        })
    })
    document.querySelector(".header-nav__dropdown").addEventListener("mouseleave", (e) => {
        const current = e.currentTarget;
        current && current.classList.remove("is-open");
        over = false;
    }) */
</script>
<div class="menu">
    <div class="menu__scrollable" data-scroll-lock-scrollable="">
        <div class="wrapper wrap-pl-1 wrap-pr-1">
            <div class="menu__wrapper">
                <div class="menu__main">
                    <ul class="menu__items menu__items--level-0">
                        <li class="menu__item menu__item--level-0">
                            <a href="/products/" class="menu__link menu__link--level-0">Техника</a>
                            <button type="button" class="menu__item-arrow menu__item-arrow--forwards"></button>
                            <ul class="menu__items menu__items--level-1">
                                <?php
                                foreach (Section::find()->where(['parent_id' => null])->andWhere(['type' => Section::TYPE_CATALOG])->orderBy(['sort' => SORT_ASC])->all() as $key => $item) {
                                    ?>
                                    <li class="menu__item menu__item--level-1">
                                        <button type="button" class="menu__item-arrow menu__item-arrow--backwards"></button>
                                        <?= Html::a($item->name, ['/products/view', 'code' => $item->code], ['class' => 'menu__link menu__link--level-1 text-default']) ?>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="menu__item menu__item--level-0">
                            <a href="/site/about" class="menu__link menu__link--level-0">Компания</a>
                            <button type="button" class="menu__item-arrow menu__item-arrow--forwards"></button>
                            <ul class="menu__items menu__items--level-1">
                                <li class="menu__item menu__item--level-1">
                                    <a href="/site/about"
                                       class="menu__link menu__link--level-1 text-default">О компании</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/site/contact"
                                       class="menu__link menu__link--level-1 text-default">Контакты</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/site/certificate"
                                       class="menu__link menu__link--level-1 text-default">Наши сертификаты</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__item menu__item--level-0">
                            <a href="/finance/index"
                               class="menu__link menu__link--level-0">Финансирование</a>
                            <button type="button" class="menu__item-arrow menu__item-arrow--forwards"></button>
                            <ul class="menu__items menu__items--level-1">
                                <li class="menu__item menu__item--heading">
                                    <button type="button" class="menu__item-arrow menu__item-arrow--backwards"></button>
                                    <a href="/finance/index.htm" class="menu__link menu__link--heading h4">Финансирование</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/finance/rsm"
                                       class="menu__link menu__link--level-1 text-default">Программа лизинга Ростсельмаш
                                        Финанс</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/finance/leasing"
                                       class="menu__link menu__link--level-1 text-default">Лизинг</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/finance/lending"
                                       class="menu__link menu__link--level-1 text-default">Кредитование</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/finance/insurance"
                                       class="menu__link menu__link--level-1 text-default">Страхование</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/finance/specials"
                                       class="menu__link menu__link--level-1 text-default">Акции</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__item menu__item--level-0">
                            <a href="/parts/index" class="menu__link menu__link--level-0">Запчасти и сервис</a>
                            <button type="button" class="menu__item-arrow menu__item-arrow--forwards"></button>
                            <ul class="menu__items menu__items--level-1">
                                <li class="menu__item menu__item--heading">
                                    <button type="button" class="menu__item-arrow menu__item-arrow--backwards"></button>
                                    <a href="/parts/index" class="menu__link menu__link--heading h4">Запчасти и
                                        сервис</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/parts/spares"
                                       class="menu__link menu__link--level-1 text-default">Оригинальные запчасти и
                                        сервис</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="/parts/qr" class="menu__link menu__link--level-1 text-default">Заявка на
                                        ремонт</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="https://rostselmash.com/spare-parts/checking-originality-parts/index.htm"
                                       class="menu__link menu__link--level-1 text-default">Проверка оригинальности
                                        деталей</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu__item menu__item--level-0">
                            <a href="/systems/" class="menu__link menu__link--level-0">Точное земледелие</a>
                            <button type="button" class="menu__item-arrow menu__item-arrow--forwards"></button>
                            <ul class="menu__items menu__items--level-1">
                                <?php
                                foreach (Section::find()->where(['parent_id' => null])->andWhere(['type' => Section::TYPE_ELECTRONIC_SYSTEM])->orderBy(['sort' => SORT_ASC])->all() as $key => $item) {
                                    ?>
                                    <li class="menu__item menu__item--level-1">
                                        <button type="button" class="menu__item-arrow menu__item-arrow--backwards"></button>
                                        <?= Html::a($item->name, ['/systems/view', 'code' => $item->code], ['class' => 'menu__link menu__link--level-1 text-default']) ?>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="menu__item menu__item--level-0">
                            <a href="https://blog.rostselmash.com/" class="menu__link menu__link--level-0">Блог Ростсельмаш</a>
                            <button type="button" class="menu__item-arrow menu__item-arrow--forwards"></button>
                            <ul class="menu__items menu__items--level-1">
                                <li class="menu__item menu__item--heading">
                                    <button type="button" class="menu__item-arrow menu__item-arrow--backwards"></button>
                                    <a href="https://blog.rostselmash.com/" class="menu__link menu__link--heading h4">Блог Ростсельмаш</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="https://blog.rostselmash.com/tekhnika-i-tekhnologii/" target="_blank" class="menu__link menu__link--level-1 text-default menu__link--external">Техника и технологии</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="https://blog.rostselmash.com/rastenievodstvo/" target="_blank" class="menu__link menu__link--level-1 text-default menu__link--external">Растениеводство</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="https://blog.rostselmash.com/zhivotnovodstvo/" target="_blank" class="menu__link menu__link--level-1 text-default menu__link--external">Животноводство</a>
                                </li>
                                <li class="menu__item menu__item--level-1">
                                    <a href="https://blog.rostselmash.com/pochva/" target="_blank" class="menu__link menu__link--level-1 text-default menu__link--external">Почва</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu__bottom bg-gray">
                    <ul class="menu__bottom-items">
                        <li class="menu__bottom-item">
                            <a href="/systems/agrotronik-i-agronomicheskie-servisy" class="menu__bottom-link text-lead" data-bottom-item="">РСМ
                                Агротроник</a>
                        </li>
                        <li class="menu__bottom-item">
                            <a href="/finance/specials" class="menu__bottom-link text-lead"
                               data-bottom-item="">Акции</a>
                        </li>
                        <li class="menu__bottom-item">
                            <a href="/site/about" class="menu__bottom-link text-lead" data-bottom-item="">О
                                компании</a>
                        </li>
                        <li class="menu__bottom-item">
                            <a href="/finance/index" class="menu__bottom-link text-lead" data-bottom-item="">
                                Финансирование
                            </a>
                        </li>
                    </ul>
                    <ul class="menu__bottom-contacts">
                        <li class="menu__bottom-item">
                            <a href="/site/contact" class="menu__bottom-link menu__bottom-link--contacts text-lead"
                               data-bottom-item="">Контакты</a>
                        </li>
                        <?php $branch = common\models\Branch::findOne(\Yii::$app->session->get('branch')); ?>
                        <li class="menu__bottom-item">
                            <a href="mailto:<?= $branch->email ?>" class="link-action link-action--primary menu__bottom-link--email" data-bottom-item="">
                                <span class="link-action__text"><?= $branch->email ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


