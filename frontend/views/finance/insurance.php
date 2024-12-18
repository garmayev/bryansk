<?php

use yii\web\View;

/**
 * @var View $this
 */
$this->title = "Страхование";
echo $this->render('_menu');
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

<div class="block-text bg-white">
    <div class="block-text__wrapper wrapper wrap-pl-1 wrap-pr-1">
        <div class="block-text__inner">
            <div class="block-text__left">
                <p class="block-text__lead text-lead mb-32 animate" data-animate="">
                    Программа страхования залога сельскохозяйственной техники&nbsp;— лучший способ обезопасить купленную технику с&nbsp;минимальными затратами и&nbsp;максимальной выгодой
                </p>
                <div class="user-text text-default animate" data-animate="" data-animate-delay="1">
                    <p>
                        Ростсельмаш Финанс совместно с крупнейшими партнёрами на&nbsp;рынке страхования предлагают сотрудничество по специальным тарифам.
                    </p>
                    <p>
                        Вы можете получить индивидуальную программу финансирования, а также необходимую консультационную поддержку в нашем дилерском центре.
                    </p>
                    <p>
                        Преимущества партнеров:
                    </p>
                    <ul style="margin-left: 0px;">
                        <li>индивидуальный подход к каждому клиенту;</li>
                        <li>присутствие во всех регионах России;</li>
                        <li>оперативное обслуживание;</li>
                        <li>сотрудничество с крупнейшими банками России и лизинговыми компаниями;</li>
                        <li>специальные тарифы по технике Ростсельмаш.</li>
                    </ul></div>
                <div class="block-text__actions block-text__actions--desktop mt-40 animate" data-animate="" data-animate-delay="1">
                    <a href="#insurance" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                        <span class="btn__text ">Заявка на страхование</span>
                    </a>
                </div>
            </div>
            <div class="block-text__right">
                <div class="user-text text-default animate" data-animate="" data-animate-delay="2">Объекты страхования: полная линейка самоходной и&nbsp;прицепной техники Ростсельмаш.<br>
                    Страховое покрытие:
                    <ul style="margin-left: 0px;">
                        <li>пожар;</li>
                        <li>взрыв;</li>
                        <li>стихийные бедствия;</li>
                        <li>авария;</li>
                        <li>дорожно-транспортные происшествия(ДТП);</li>
                        <li>хищение или угон;</li>
                        <li>противоправные действия третьих лиц;</li>
                        <li>падение летательных аппаратов и других предметов;</li>
                        <li>воздействие животных.</li>
                    </ul></div>
            </div>
        </div>
        <div class="block-text__actions block-text__actions--adaptive mt-40" data-animate="">
            <a href="#insurance" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                <span class="btn__text ">Заявка на страхование</span>
            </a>
        </div>
    </div>
</div>
<div class="overflow-hidden bg-gray pt-48 pt-md-64 pt-lg-112 pb-48">
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <h2 class="h2 mb-32 mb-lg-80 animate" data-animate="">Этапы сделки</h2>
    </div>
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <ol class="steps-list steps-list--fixed">
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="2">
                <div class="steps-list__title animate" data-animate="">Заполнить заявление на&nbsp;страхование</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="3">
                <div class="steps-list__title animate" data-animate="">Предоставить имущество для осмотра представителям страховой компании</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="4">
                <div class="steps-list__title animate" data-animate="">Заключить договор страхования</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="5">
                <div class="steps-list__title animate" data-animate="">Оплатить страховую премию по&nbsp;договору</div>
            </li>
        </ol>
    </div>
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <div class="partners-list">
            <div class="partners-list__item" data-animate="" data-animate-delay="1">
                <div class="card-partner">
                    <a href="https://www.alfastrah.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/5fc/5fcf1d9d4f802cc45f4ad48e2646cc17.png" data-src="/upload/iblock/5fc/5fcf1d9d4f802cc45f4ad48e2646cc17.png" alt="ООО «АльфаСтрахование»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ООО «АльфаСтрахование»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                Группа «АльфаСтрахование»&nbsp;— одна из&nbsp;крупнейших российских страховых компаний с&nbsp;универсальным портфелем услуг, включающим как комплексные программы защиты интересов бизнеса, так и&nbsp;широкий спектр страховых продуктов для частных лиц. Компания предлагает более 200 решений по всем ключевым видам страхования.
                            </p>
                            <p>
                                «АльфаСтрахование» широко представлена в&nbsp;регионах России: на&nbsp;территории&nbsp;РФ страховую деятельность осуществляют более 270 региональных представительств. Услугами группы пользуются более 31 млн. частных лиц и свыше 99 тыс. компаний по всей России.
                            </p>
                            <p>
                                Надежность и финансовую устойчивость компании подтверждают рейтинги ведущих международных и российских рейтинговых агентств: «ВВ+» по шкале Fitch Ratings, «ВВ+» по шкале S&amp;P и «ruАA+» по шкале «Эксперт РА».
                            </p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="2">
                <div class="card-partner">
                    <a href="https://www.rshbins.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/b24/b245ae72a5bc6c658e816b49852d2e8b.png" data-src="/upload/iblock/b24/b245ae72a5bc6c658e816b49852d2e8b.png" alt="АО СК «РСХБ-Страхование»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">АО СК «РСХБ-Страхование»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                «АО&nbsp;СК&nbsp;«РСХБ-Страхование»&nbsp;— страховая компания, предоставляющая услуги корпоративным и&nbsp;частным клиентам. Приоритетные направления деятельности&nbsp;— страхование рисков предприятий агропромышленного комплекса и&nbsp;банкострахование. <br>
                                АО СК «РСХБ-Страхование» входит в группу компаний АО «Россельхозбанк» с размером уставного капитала - 624 млн. рублей. Компания реализует свои страховые продукты в 73 субъектах Российской Федерации.
                            </p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="3">
                <div class="card-partner">
                    <a href="https://www.vsk.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://rostselmash.com/upload/iblock/78a/78a9f18851aba3949ff8d5a27dd7133d.png" alt="Страховой Дом ВСК (САО «ВСК»)">
                        </div>
                        <div class="card-partner__title text-lead mb-16">Страховой Дом ВСК (САО «ВСК»)</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                Страховой Дом ВСК (САО «ВСК») осуществляет страховую деятельность с&nbsp;11&nbsp;февраля 1992 года и&nbsp;в&nbsp;настоящее время занимает ведущие позиции на&nbsp;рынке страховых услуг России. В&nbsp;2017 году компания отметила 25-летний юбилей. Надежность и финансовая устойчивость компании подтверждены рейтингами ведущих российских и международных рейтинговых агентств: «ruAA» – по версии «Эксперт РА», АА(RU) – по версии АКРА и «BB» – по международной шкале Fitch Ratings. Для покупателей техники Ростсельмаш САО «ВСК» представляет единую тарифную ставку в&nbsp;размере 0,3% вне зависимости от&nbsp;канала продаж (лизинговые компании, банки, дилерские центры).
                            </p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="4">
                <div class="card-partner">
                    <a href="https://www.rgs.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://rostselmash.com/upload/iblock/ebc/ebc59a8751bf12f40fa925e751a525d8.png" alt="ПАО СК «Росгосстрах»">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ПАО СК «Росгосстрах»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>ПАО СК "Росгосстрах" - одна из крупнейших страховых компаний в России по масштабам присутствия, активам и размеру собранных страховых премий. В 2020 г. рейтинговое агентство "Эксперт РА" присвоило СК "Росгосстрах" высокий рейтинг финансовой надежности - "ruAA" со стабильным прогнозом. СК "Россгосстрах имеет более 1500 филиалов и офисов продаж по всей стране, а также порядка 300 центров и пунктов урегулирования убытков.</p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="5">
                <div class="card-partner">
                    <a href="https://www.zettains.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://rostselmash.com/upload/iblock/81e/81ec17cbc7286cb0f55ffc5264d184a1.png" alt="ООО «Зетта Страхование»">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ООО «Зетта Страхование»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>ООО «Зетта Страхование»&nbsp;— универсальная страховая компания. Компания предоставляет более 90&nbsp;программ страхования и&nbsp;перестрахования. Сегодня у&nbsp;компании более 100 точек продаж, около 7000 агентов в&nbsp;более чем 150 населенных пунктах России. Надежность и финансовая устойчивость ООО «Зетта Страхование» подтверждена рейтинговым агентством "Эксперт РА" на уровне "ruA+" со стабильным прогнозом.</p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="6">
                <div class="card-partner">
                    <a href="https://www.absolutins.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://rostselmash.com/upload/iblock/d78/ozf96qwjr8unnno62extwzmt6uilvws0.png" alt="ООО «Абсолют Страхование»">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ООО «Абсолют Страхование»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>ООО «Абсолют Страхование» – универсальная страховая компания федерального уровня, предоставляющая широкий спектр страховых продуктов.
                                Входит в состав Инвестиционной группы АБСОЛЮТ.
                                В рэнкингах по объемам сборов в сельскохозяйственном страховании компания входит в топ -10. </p>
                            <p>Рейтинг надежности ruA+ (Эксперт РА), Активы компании - 10,4 млрд. рублей.
                                Компания входит в топ-10 по цифровизации страховых компаний по версии фонда «Сколково» и VR_Bank. </p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-text bg-white block-text--has-title">
    <div class="block-text__wrapper wrapper wrap-pl-1 wrap-pr-1">
        <div class="block-text__inner">
            <div class="block-text__left">
                <h2 class="block-text__title h2 mb-40 animate" data-animate="">Перечень документов</h2>
                <div class="block-text__actions block-text__actions--desktop mt-40 animate" data-animate="" data-animate-delay="1">
                    <a href="#insurance" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                        <span class="btn__text ">Заявка на страхование</span>
                    </a>
                </div>
            </div>
            <div class="block-text__right">
                <div class="user-text text-default animate" data-animate="" data-animate-delay="2">
                    <ul>
                        <li>Заполненное и подписанное страхователем заявление на страхование;</li>
                        <li>Договор залога (копия);</li>
                        <li>Договор купли/продажи;</li>
                        <li>Копия ПСМ;</li>
                        <li>Предстраховой осмотр с/х техники (по&nbsp;необходимости).</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block-text__actions block-text__actions--adaptive mt-40" data-animate="">
            <a href="#insurance" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                <span class="btn__text ">Заявка на страхование</span>
            </a>
        </div>
    </div>
</div>