<?php

use yii\web\View;

/**
 * @var View $this
 */

echo $this->render('_menu');

$this->title = "Программа лизинга Ростсельмаш Финанс";
//$this->registerJsFile("/redizine/jquery.sticky-kit.js", ['position' => View::POS_LOAD]);
//$this->registerJsFile("/local/components/uplab.production/region.selector/templates/.default/script.js", ['position' => View::POS_LOAD]);
$this->registerJs(<<<JS
$(document).on('click', '.js-set-leasing-title-js', function() {
    let item = $(this);
    let title = item.attr('data-title');
    $('#leasing h3.modal__head.h3').text(title);
    if(title === 'Ростсельмаш Финанс') {
        title = 'Программа лизинга Ростсельмаш Финанс';
    }
    $('#leasing').find('[name=PROP_TYPE]').val(title);
})
JS);
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".logo-white").style.display = "none !important";
        document.querySelector(".logo-red").style.display = "block !important";
        document.querySelector(".w-logo").style.display = "none";
        document.querySelector(".r-logo").style.display = "block";
        document.querySelector(".header.js-header").classList.remove("is-white");
    })
</script>
<div class="mb-lg-128 mb-md-96 mb-80 wrapper wrap-pl-1 wrap-pr-1">
    <div class="mt-lg-96-negative mt-56-negative">
        <div class="detail-conditions">
            <div class="detail-conditions__row">
                <div class="detail-conditions__col detail-conditions__col-info">
                    <div class="detail-conditions__item">
                        <div class="detail-conditions__title">
                            От 1 месяца
                        </div>
                        <div class="detail-conditions__subtitle">
                            Срок ведения бизнеса
                        </div>
                    </div>
                    <div class="detail-conditions__item">
                        <div class="detail-conditions__title">
                            До 7 лет
                        </div>
                        <div class="detail-conditions__subtitle">
                            Срок лизинга
                        </div>
                    </div>
                    <div class="detail-conditions__item">
                        <div class="detail-conditions__title">
                            За 8 часов
                        </div>
                        <div class="detail-conditions__subtitle">
                            Решение по сделке*
                        </div>
                    </div>
                    <div class="detail-conditions__item">
                        <div class="detail-conditions__title">
                            От 0%
                        </div>
                        <div class="detail-conditions__subtitle">
                            Аванс
                        </div>
                    </div>

                    <div class="detail-conditions__item">
                        <div class="detail-conditions__title">

                            Единая ставка
                        </div>
                        <div class="detail-conditions__subtitle">
                            Для всех клиентов без ограничений
                        </div>
                    </div>

                    <div class="detail-conditions__item">
                        <div class="detail-conditions__title">
                            Электронный
                        </div>
                        <div class="detail-conditions__subtitle">
                            Документооборот
                        </div>
                    </div>


                </div>
                <div class="detail-conditions__col detail-conditions__col-call">
                    <div class="detail-conditions__info">
                        <div class="detail-conditions__info-title">
                            Кто может воспользоваться?
                        </div>
                        <div class="detail-conditions__info-text">
                            Индивидуальные предприниматели и юридические лица <br> со сроком ведения бизнеса от 1 месяца
                            с даты
                            регистрации в едином государственном реестре.
                        </div>
                        <div class="detail-conditions__info-footer">
                            <div class="detail-conditions__info-footer-item">
                                <a href="#leasing" data-title="Ростсельмаш Финанс"
                                   class="btn btn--primary btn--hover-gray js-set-leasing-title-js" data-modal=""
                                   data-effect="mfp-move-from-left">
                                    <span class="btn__text ">Оставить заявку</span>
                                </a>
                            </div>
                            <div class="detail-conditions__info-footer-item">
                                <div class="user-text">
                                    <!--<a href="/financing/leasing/">Популярные вопросы</a>-->                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tech-steps">
            <div class="tech-cards-list__head">
                <div class="tech-steps__title tech-cards-list__title">
                    Как получить технику Ростсельмаш в лизинг
                </div>
            </div>

            <div class="tech-steps__body">
                <div class="tech-steps__block">
                    <div class="tech-steps__item">
                        <div class="tech-steps__item-inner animate" data-animate-delay="1" data-animate="">
                            <div class="tech-steps__line"></div>
                            <div class="tech-steps__text">Выберите машину из модельного ряда Роcтсельмаш и подайте
                                заявку
                            </div>
                        </div>

                    </div>
                    <div class="tech-steps__item">
                        <div class="tech-steps__item-inner animate" data-animate-delay="2" data-animate="">
                            <div class="tech-steps__line"></div>
                            <div class="tech-steps__text">Получите консультацию и расчет от менеджера Ростсельмаш
                                Финанс
                            </div>
                        </div>

                    </div>
                    <div class="tech-steps__item">
                        <div class="tech-steps__item-inner animate" data-animate-delay="3" data-animate="">
                            <div class="tech-steps__line"></div>
                            <div class="tech-steps__text">Менеджер Ростсельмаш Финанс оформит договор лизинга</div>
                        </div>

                    </div>
                    <div class="tech-steps__item">
                        <div class="tech-steps__item-inner animate" data-animate-delay="4" data-animate="">
                            <div class="tech-steps__line"></div>
                            <div class="tech-steps__text">Подпишите договорную документацию (Возможно подписание
                                договора в личном кабинете по ЭДО)
                            </div>
                        </div>

                    </div>
                    <div class="tech-steps__item">
                        <div class="tech-steps__item-inner animate" data-animate-delay="5" data-animate="">
                            <div class="tech-steps__line"></div>
                            <div class="tech-steps__text">Получите технику Ростсельмаш</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="advantages-leasing">
            <div class="advantages-leasing__head tech-cards-list__head">
                <div class="tech-cards-list__title advantages-leasing__title">Преимущества лизинга от Ростсельмаш
                    Финанс
                </div>
            </div>
            <div class="advantages-leasing__body">

                <div class="advantages-leasing__block advantages-leasing__block-list">
                    <div class="advantages-leasing__list-row">
                        <div class="advantages-leasing__list-col">

                            <div class="advantages-leasing__list-item animate" data-animate-delay="1" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Подбор оптимального графика платежей
                                </div>
                            </div>
                            <div class="advantages-leasing__list-item animate" data-animate-delay="2" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Оперативное принятие решения по сделке
                                </div>
                            </div>
                            <div class="advantages-leasing__list-item animate" data-animate-delay="3" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Минимальный пакет документов
                                </div>
                            </div>
                            <div class="advantages-leasing__list-item animate" data-animate-delay="4" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Отсутствие дальнейшего мониторинга и предоставления финансовой отчетности
                                </div>
                            </div>

                        </div>
                        <div class="advantages-leasing__list-col">
                            <div class="advantages-leasing__list-item animate" data-animate-delay="1" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Более 60 городов обеспечивают возможность реализации сделок с клиентами по всей
                                    России
                                </div>
                            </div>
                            <div class="advantages-leasing__list-item animate" data-animate-delay="2" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Фиксированная ставка на весь срок действия договора лизинга
                                </div>
                            </div>
                            <div class="advantages-leasing__list-item animate" data-animate-delay="3" data-animate="">
                                <div class="advantages-leasing__list-text">
                                    Минимальная ставка для всех независимо от сегмента, рейтинга и финансового положения
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="advantages-leasing__block advantages-leasing__block-form">
                    <div class="advantages-leasing__form-title animate" data-animate-delay="1" data-animate="">
                        Оставьте заявку сейчас
                    </div>
                    <div class="advantages-leasing__text animate" data-animate-delay="2" data-animate="">Ваша заявка
                        будет рассмотрена в сжатые сроки и мы сообщим вам результат рассмотрения удобным вам способом
                    </div>
                    <div class="advantages-leasing__action animate" data-animate-delay="3" data-animate="">

                        <div class="advantages-leasing__action-item">
                            <a href="#leasing" data-title="Ростсельмаш Финанс"
                               class="btn btn--primary btn--hover-gray js-set-leasing-title-js" data-modal=""
                               data-effect="mfp-move-from-left">
                                    <span class="btn__text">
                                        Оставить заявку
                                    </span>
                            </a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

        <div class="tech-cards-list__head">
            <div class="tech-cards-list__title">Техника Ростсельмаш</div>
        </div>

        <div class="tech-cards-list">

            <div class="tech-cards-list__wrap">


                <div class="tech-cards-list__content">

                    <div class="tech-cards-list__row">


                        <?php
                        $tech = \common\models\Section::find()->where(['parent_id' => null])->andWhere(['type' => \common\models\Section::TYPE_CATALOG])->orderBy(["sort" => SORT_ASC])->all();
                        $images = [
                            "/upload/finance/ursw8gsgq1rcly62bl0w6z53yklf51h2.jpg",
                            "/upload/finance/11atdx35tjyp1ptw5ydp822yyvr9mtmp.webp",
                            "/upload/finance/cms1zt96j31m1ufc7z872z4urpo12kjo.jpg",
                            "/upload/finance/tjyzppk77q9sbx0dtfz1ffrw87xv1koh.jpg",
                            "/upload/finance/ir7mx27hb6hd5b3n59rfyel9itqjf0wx.jpg",
                            "/upload/finance/tl9ybjy6p3qh106gvp7ood2g0p35c8pt.jpg",
                            "/upload/finance/u5fgpafige2h5jddehddlnvtv0zx5tq4.png",
                            "/upload/finance/8cy2pbrdsbtdwv8hcrgcnfop31pz5n5f.jpg",
                            "/upload/finance/p5yekte31t8caai8romuhxly2g6wlums.jpg",
                            "/upload/finance/sc2jlq4zi88c055awfrhqjwjb3r4tkox.jpg",
                            "/upload/finance/1eh76vyjds9rreujragxnpxbco0vl0s6.jpg",
                            "/upload/finance/xzr05qj2o1c6qjq9n92ojiibnwx4sla2.jpg",
                        ];
                        foreach ($tech as $key => $item) {
                            $name = $item->name;
                            echo "
<div class='tech-cards-list__col'>
    <div class='card' itemscope='' itemtype='http://schema.org/ImageObject'>
        <a href='#leasing' data-title='{$name} в лизинг' data-modal='' data-effect='mfp-move-from-left' class='card__inner js-set-leasing-title-js'>
            <div class='card__img'>
                <img class='image is-lazy isItemProp is-loaded' src='{$images[$key]}' data-src='{$images[$key]}' itemprop='contentUrl' alt='{$name}' data-ll-status='loaded'>
            </div>
        </a>
        <div class='card__info'>
            <div class='card__info-wrap'>
                <a href='#leasing' data-title='{$name} в лизинг' data-modal='' data-effect='mfp-move-from-left' class='card__inner js-set-leasing-title-js'>
                    <div class='card__title h5 animate' data-animate-lines='' itemprop='name' style='opacity: 1;'>
                        <div style='display: block; text-align: left; position: relative;'>{$name}</div>
                    </div>
                </a>
                <div class='card__info-footer'>
                    <a href='#leasing' data-title='{$name} в лизинг' data-modal='' data-effect='mfp-move-from-left' class='card__inner js-set-leasing-title-js'></a>
                    <a href='#leasing' data-title='{$name} в лизинг' data-modal='' data-effect='mfp-move-from-left' class='btn btn--gray btn--hover-primary js-set-leasing-title-js'>
                        <span class='btn__text'>Отправить заявку</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="insurance-description">
            <div class="insurance-description__title">
                Страховое покрытие техники и оборудования Ростсельмаш от
            </div>
            <div class="insurance-description__row">
                <div class="insurance-description__col">
                    <div class="insurance-description__content">
                        <div class="insurance-description__text user-text">
                            <ul>
                                <li>Пожара</li>
                                <li>Взрыва</li>
                                <li>стихийных бедствий</li>
                                <li>Аварий</li>
                                <li>Дорожно-транспортных происшествий (ДТП)</li>
                                <li>Хищение или угона</li>
                                <li>Противоправных действий третьих лиц</li>
                                <li>Падения летательных аппаратов и других предметов</li>
                                <li>Воздействия животных</li>
                            </ul>
                            <h5>Страхование дополнительного оборудования бесплатно при приобретении основной техники
                                Ростсельмаш </h5>
                            <ul>
                                <li>Дополнительное оборудование не более 20% от стоимости основной техники</li>
                                <li>Навесное и прицепное оборудование приобретается одновременно с основной техникой
                                </li>
                                <li>Страхование осуществляется через ООО СК «Сбербанк страхование»</li>
                            </ul>
                        </div>
                    </div>
                    <div class="insurance-description__footer">
                        <a href="#leasing" data-title="Ростсельмаш Финанс"
                           class="btn btn--primary btn--hover-gray js-set-leasing-title-js" data-modal=""
                           data-effect="mfp-move-from-left">
                            <span class="btn__text ">Оставить заявку</span>
                        </a>
                    </div>
                </div>
                <div class="insurance-description__col">

                    <div class="insurance-description__img">
                        <img src="/images/bg-full.png" alt="">
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
