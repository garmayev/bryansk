<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme('black');
        siteId = 's1';
    })
</script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=589c9c6f-9d2f-4233-9eb2-789dbc720a6c&lang=ru_RU"
        type="text/javascript"></script>
<div class="hero pb-56">
    <div class="hero__inner wrapper wrap-pl-1 wrap-pr-1">
        <nav class="breadcrumbs animate" aria-label="breadcrumb" data-animate="">
            <ul class="breadcrumbs__list text-default" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumbs__crumb" itemprop="itemListElement" itemscope=""
                    itemtype="https://schema.org/ListItem">
                    <a href="/" class="breadcrumbs__text breadcrumbs__link text-lead" itemprop="item">
                        <span itemprop="name">Главная</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
            </ul>
        </nav>
        <h1 class="hero__title h2">Контакты</h1>
    </div>
</div>
<div class="map-box map-box--outline" data-map-box-contacts="" data-map-network=""
     data-url="/local/templates/.default/components/bitrix/news.list/map-box-contacts/contactsMapData_s1.json">
    <div class="map-box__container animate" data-animate="">
        <div class="map-box__frame map-box__frame--bottom" id="rt-yandex-map-custom" style=""></div>
        <div class="map-box__bottom wrap-pl-1">
            <?php
                $branch = \common\models\Branch::findOne(\Yii::$app->session->get('branch'));
                $cleanPhone = preg_replace('/[\ \(\)\+]/', '', $branch->phone);
            ?>
            <div class="h3 map-box__bottom-heading">
                Контактные данные
            </div>
            <div class="map-box__bottom-adress text-default">
                <?= $branch->title ?><br><?= $branch->address ?>
            </div>
            <div class="map-box__bottom-contacts text-default">
                <div class="map-box__bottom-contact">
                    <a href="tel:<?= $cleanPhone ?>" class="text-link text-default text-link--white">
                        <?= $branch->phone ?>
                    </a>
                </div>
                <div class="map-box__bottom-contact">
                    <a href="mailto:<?= $branch->email ?>"
                       class="text-link text-default text-link--white"><?= $branch->email ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-96 mt-lg-128 wrap-pl-1 wrap-pr-1">
    <div class="contacts-table">
        <div class="contacts-table__top">
            <div class="contacts-table__heading h2">
                Контакты отделов
            </div>
            <div class="contacts-table__action">
                <a href="/where-buy/" class="link-action link-action--line-animate-out">
                    <span class="link-action__text">Найти дилера</span>
                </a>
            </div>
        </div>
        <div class="contacts-table__table">
            <?php
            $branches = \common\models\Branch::find()->all();
            $b = [];
            foreach ($branches as $branch) {
                $b[$branch->region][] = $branch;
            }
            foreach ($b as $region => $c) {
                $cleanPhone = preg_replace('/[\ \(\)\+]/', '', $branch->phone);
                echo "<p class='h3 my-16'>{$region}</p>";
                foreach ($c as $branch) {
                    echo "
<div class='contacts-table__row'>
    <div class='contacts-table__cell  contacts-table__cell-heading'>
        <div class='h4'>{$branch->title}</div>
        <div class='text-lead'>
            <svg width='14' height='17' viewBox='0 0 14 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd' clip-rule='evenodd' d='M0 6.68985C0 8.92581 1.11665 10.9098 2.30668 12.4059C3.51094 13.9199 4.90213 15.0747 5.69067 15.6747C6.46957 16.2673 7.53048 16.2673 8.30938 15.6747C9.09792 15.0747 10.4891 13.9199 11.6933 12.4059C12.8834 10.9098 14 8.92581 14 6.68985C14 2.97266 10.7744 0.119141 7.00002 0.119141C3.22556 0.119141 0 2.97266 0 6.68985ZM7.00002 8.62244C5.70044 8.62244 4.81267 7.66891 4.81267 6.68988C4.81267 5.71086 5.70044 4.75731 7.00002 4.75731C8.2996 4.75731 9.18731 5.71086 9.18731 6.68988C9.18731 7.66891 8.2996 8.62244 7.00002 8.62244Z' fill='#B3B9BD'></path>
            </svg>
			{$branch->title}, {$branch->address}
        </div>
    </div>
    <div class='contacts-table__cell '>
        <div class='contacts-table__contact'>
            <div class='contacts-table__label text-default text-mute'>
                <svg width='16' height='17' viewBox='0 0 16 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M11.4668 11.2183L10.9459 11.9997C10.8419 12.1557 10.7044 12.2888 10.5232 12.3367C9.92955 12.4935 8.35357 12.5643 5.95418 10.165C3.5548 7.76558 3.62562 6.18957 3.78247 5.59595C3.83036 5.41473 3.96343 5.27721 4.11941 5.17324L4.9008 4.65231C5.48256 4.26447 5.63976 3.47845 5.25192 2.89669L3.77613 0.683018C3.43761 0.175236 2.78501 -0.0187664 2.22407 0.221636L1.55833 0.506948C1.0526 0.723692 0.640069 1.11267 0.39401 1.60479C0.188432 2.01595 0.029095 2.44892 0.00750637 2.90811C-0.0605285 4.35515 0.256773 7.92026 4.22783 11.8913C8.19889 15.8624 11.764 16.1796 13.211 16.1116C13.6702 16.09 14.1032 15.9306 14.5144 15.7251C15.0065 15.4791 15.3954 15.0665 15.6122 14.5607L15.8975 13.8951C16.1379 13.3341 15.9439 12.6815 15.4361 12.343L13.2224 10.8672C12.6407 10.4794 11.8547 10.6366 11.4668 11.2183Z' fill='#B3B9BD'></path>
                </svg>
                Телефон
            </div>
            <div class='contacts-table__list'>
                <div class='contacts-table__contact-link'>
                    <a href='tel:{$cleanPhone}' class='text-link text-default'>{$branch->phone}</a>
                </div>
                <div class='contacts-table__label mt-16'>
                    <svg width='16' height='16' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' clip-rule='evenodd' d='M13.6972 2.66666H2.30278C1.58327 2.66666 1 3.24993 1 3.96943C1 4.40502 1.21769 4.81179 1.58013 5.05341L2.71258 5.80838L6.3359 8.22392C7.3436 8.89572 8.6564 8.89572 9.6641 8.22392L13.2874 5.80838L14.4199 5.05341C14.7823 4.81179 15 4.40502 15 3.96943C15 3.24993 14.4167 2.66666 13.6972 2.66666ZM1.33333 8.33332C1.33333 8.21116 1.34064 8.0907 1.35483 7.97236C1.42522 7.38534 2.11021 7.20957 2.60214 7.53752L5.50385 9.472C7.0154 10.4797 8.9846 10.4797 10.4962 9.472L13.3979 7.53752C13.8898 7.20957 14.5748 7.38534 14.6452 7.97236C14.6594 8.0907 14.6667 8.21116 14.6667 8.33332V11.3333C14.6667 12.4379 13.7712 13.3333 12.6667 13.3333H3.33333C2.22876 13.3333 1.33333 12.4379 1.33333 11.3333V8.33332Z' fill='#B3B9BD'></path>
                    </svg>
					<a href='mailto:{$branch->email}'>{$branch->email}</a>
			    </div>
            </div>
        </div>
    </div>
</div>";
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="mt-96 mt-lg-128">
    <div class="appointment-form appointment-form--light ">
        <div class="wrapper wrap-pl-1 wrap-pr-1">
            <div class="appointment-form__head">
                <div class="appointment-form__title h2 animate" data-animate="">Связаться с нами</div>
            </div>

            <div class="appointment-form__content">
                <div class="appointment-form__left">
                    <div class="appointment-form__des">
                        <p class="text-default animate" data-animate="">
                            Оставьте свои контакты и мы перезвоним вам в ближайшее время
                        </p>
                    </div>
                </div>
                <div class="appointment-form__right">
                    <?php
                    ActiveForm::begin([
                        'method' => 'post',
                        'action' => '/site/contact',
                        'options' => [
                            'class' => 'appointment-form__form js-validate animate',
                            'id' => 'contacts-form',
                        ]
                    ])
                    ?>
                    <div class="appointment-form__col appointment-form__col--half">
                        <div class="field">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="7427356PROP_NAME" name="ContactForm[name]" class="input input--default" placeholder="Имя" type="text" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col appointment-form__col--half">
                        <div class="field">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="7427356PROP_MAIL" name="ContactForm[mail]" class="input input--default"
                                           placeholder="Email" type="text" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col appointment-form__col--half">
                        <div class="field">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="7427356PROP_PHONE" name="ContactForm[phone]" class="input input--default"
                                           placeholder="+7 (___) ___ __ __" data-mask-tel=""
                                           data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                           type="tel" inputmode="tel" required="" data-parsley-trigger="change"
                                           data-initialized-mask="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col appointment-form__col--large">
                        <div class="field theme-light">
                            <div class="control">
                                <select id="7427356PROP_DIRECTION" class="select select2-hidden-accessible"
                                        name="ContactForm[direction]" data-select="" data-select-size="default"
                                        data-select-theme="light" data-select-placeholder="Выберите тему сообщения"
                                        data-select2-id="ContactForm[direction]" tabindex="-1" aria-hidden="true">
                                    <option label="Выберите тему сообщения" data-select2-id="2"></option>
                                    <option value="Приобретение техники">
                                        Приобретение техники
                                    </option>
                                    <option value="Запрос информации о сервисе">
                                        Запрос информации о сервисе
                                    </option>
                                    <option value="Работа в Ростсельмаш">
                                        Работа в Ростсельмаш
                                    </option>
                                    <option value="Сообщить об ошибке на сайте">
                                        Сообщить об ошибке на сайте
                                    </option>
                                    <option value="Запись на экскурсию">
                                        Запись на экскурсию
                                    </option>
                                    <option value="Внести предложение или оставить отзыв">
                                        Внести предложение или оставить отзыв
                                    </option>
                                    <option value="Прочее">
                                        Прочее
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col appointment-form__col--large">
                        <div class="field">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="7427356PROP_QUESTION" name="ContactForm[message]" class="input input--default"
                                           placeholder="Ваш вопрос" type="text" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col appointment-form__col--half">
                        <button type="submit" class="btn btn--empty-black btn--hover-primary">
                            <span class="btn__text ">Отправить</span>
                        </button>
                    </div>
                    <div class="appointment-form__col appointment-form__col--half">
                        <div class="appointment-form__privacy">
                            <div class="field theme-primary">
                                <div class="control">
                                    <label class="checkbox checkbox--primary ">
                                        <input type="checkbox" class="checkbox__input" name="application-form-privacy"
                                               id="7427356application-form-privacy" required=""
                                               data-parsley-multiple="application-form-privacy">
                                        <span class="checkbox__box"></span>
                                        <span class="checkbox__inner">
                                                <i class="icon is-small" aria-hidden="true">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1" y="1" width="22" height="22" fill="#212121"
                                                              stroke="#212121" stroke-width="2"></rect>
                                                        <path d="M5 12L9.66667 17L19 7" stroke="white"
                                                              stroke-width="2"></path>
                                                    </svg>
                                                </i>
                                            </span>
                                        <span class="checkbox__text">Нажимая «Отправить заявку» , Вы соглашаетесь с <a
                                                    href="/privacy-policy/" class="">Политикой конфиденциальности</a> и <a
                                                    href="/terms-of-use/"
                                                    class="">обработкой персональных данных</a></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    ActiveForm::end();
                    ?>
                </div>
            </div>
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

        const myMap = new ymaps.Map("rt-yandex-map-custom", {
            center: [centerLat / models.length, centerLong / models.length],
            zoom: 7,
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
                balloonContentHeader: model.type ? `Дилерский центр, г. ${model.city}` : `Опорный пункт, г. ${model.city}`,
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
