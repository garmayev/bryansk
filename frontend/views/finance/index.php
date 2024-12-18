<?php

use yii\web\View;

/**
 * @var View $this
 */

$this->title = "Кредитование";
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
                <p class="block-text__lead text-lead mb-32 animate" data-animate="">Простой и удобный способ стать собственником техники Ростсельмаш&nbsp;уже сейчас</p>
                <div class="user-text text-default animate" data-animate="" data-animate-delay="1"><p>
                        Банки-партнеры Ростсельмаш Финанс предлагают Вам программы кредитования, позволяющие приобрести сельскохозяйственную технику на максимально выгодных условиях, в соответствии с Вашими пожеланиями.
                    </p>
                    <p>
                        <br>
                    </p>
                    <p>
                        В нашем дилерском центре Вы можете получить индивидуальную программу финансирования, а также необходимую консультационную поддержку.
                    </p>
                </div>
                <div class="block-text__actions block-text__actions--desktop mt-40 animate" data-animate="" data-animate-delay="1">
                    <a href="#lending" class="btn btn--primary btn--hover-primary" data-modal="" data-effect="mfp-move-from-left">
                        <span class="btn__text ">Заявка на кредит</span>
                    </a>
                </div>
            </div>
            <div class="block-text__right">
                <div class="user-text text-default animate" data-animate="" data-animate-delay="2"><ul>
                        <li>Привлекательные процентные ставки;</li>
                        <li>Оптимальные сроки кредитования: до 7 лет;</li>
                        <li>Кредитование под залог приобретаемой техники;</li>
                        <li>Анкета, учредительные и регистрационные документы юридического лица/индивидуального предпринимателя, финансовая отчетность, документы по хозяйственной деятельности.</li>
                    </ul></div>
            </div>
        </div>
        <div class="block-text__actions block-text__actions--adaptive mt-40" data-animate="">
            <a href="#lending" class="btn btn--primary btn--hover-primary" data-modal="" data-effect="mfp-move-from-left">
                <span class="btn__text ">Заявка на кредит</span>
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
                <div class="steps-list__title animate" data-animate="">Выбрать технику</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="3">
                <div class="steps-list__title animate" data-animate="">Обратиться в банк, заполнить заявление на&nbsp;кредитование</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="4">
                <div class="steps-list__title animate" data-animate="">Предоставить пакет документов в&nbsp;банк</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="5">
                <div class="steps-list__title animate" data-animate="">Заключить договор купли-продажи с дилером Ростсельмаш и заплатить аванс</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots" data-animate="" data-animate-delay="6">
                <div class="steps-list__title" data-animate="">Получить кредитное решение</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots" data-animate="" data-animate-delay="7">
                <div class="steps-list__title" data-animate="">Оформить технику в собственность, подписать кредитные документы с&nbsp;банком</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots" data-animate="" data-animate-delay="8">
                <div class="steps-list__title" data-animate="">Получить кредит от банка, перечислить денежные средства дилеру Ростсельмаш</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots" data-animate="" data-animate-delay="9">
                <div class="steps-list__title" data-animate="">Стать счастливым обладателем техники Ростсельмаш</div>
            </li>
        </ol>

    </div>
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <h2 class="h2 mb-32 mb-lg-40 mt-48" data-animate="">Банки-партнеры</h2>
    </div>
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <div class="partners-list">
            <div class="partners-list__item" data-animate="" data-animate-delay="1">
                <div class="card-partner">
                    <a href="https://www.sberbank.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy" src="https://rostselmash.com/upload/iblock/3df/3df4b5746beeb1f8752b81200f24b950.svg" data-src="https://rostselmash.com/upload/iblock/3df/3df4b5746beeb1f8752b81200f24b950.svg" alt="ПАО Сбербанк России">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ПАО Сбербанк России</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                ПАО Сбербанк России&nbsp;— крупнейший банк в&nbsp;России и&nbsp;один из&nbsp;ведущих глобальных финансовых институтов. На&nbsp;долю Сбербанка приходится около трети активов всего российского банковского сектора. Сбербанк является ключевым кредитором для национальной экономики и&nbsp;занимает крупнейшую долю на&nbsp;рынке вкладов. Учредителем и&nbsp;основным акционером ПАО «Сбербанк России» является Центральный банк Российской Федерации, владеющий&nbsp;50% уставного капитала плюс одна голосующая акция. Другими&nbsp;50% акций Банка владеют российские и&nbsp;международные инвесторы. Услугами Сбербанка пользуются более 110 млн физических лиц и&nbsp;около 1&nbsp;млн предприятий в&nbsp;20&nbsp;странах мира. Банк располагает самой обширной филиальной сетью в&nbsp;России: более 18&nbsp;тысяч отделений и&nbsp;внутренних структурных подразделений. Зарубежная сеть Банка состоит из&nbsp;дочерних банков, филиалов и&nbsp;представительств в&nbsp;Великобритании, США, СНГ, Центральной и&nbsp;Восточной Европе, Турции и&nbsp;других странах.
                            </p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="2">
                <div class="card-partner">
                    <a href="https://www.rshb.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy" src="https://rostselmash.com/upload/iblock/0e2/0e21a9e3f598bbb5df4dace97eccf1e2.jpg" data-src="https://rostselmash.com/upload/iblock/0e2/0e21a9e3f598bbb5df4dace97eccf1e2.jpg" alt="АО «Российский Сельскохозяйственный банк»">
                        </div>
                        <div class="card-partner__title text-lead mb-16">АО «Российский Сельскохозяйственный банк»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32">АО&nbsp;«Российский Сельскохозяйственный банк»&nbsp;— один из&nbsp;крупнейших банков в&nbsp;России. Созданный в&nbsp;2000 году в&nbsp;целях развития национальной кредитно-финансовой системы агропромышленного сектора и&nbsp;сельских территорий Российской Федерации, сегодня это универсальный коммерческий банк, предоставляющий все виды банковских услуг и&nbsp;занимающий лидирующие позиции в&nbsp;финансировании агропромышленного комплекса России.&nbsp;100% акций банка находится в&nbsp;собственности государства.<br>
                            Россельхозбанк входит в&nbsp;число самых крупных и&nbsp;устойчивых банков страны по&nbsp;размеру активов и&nbsp;капитала, а&nbsp;также в&nbsp;высшую группу надежности в&nbsp;Рейтинге 100 Банков по&nbsp;версии журнала Forbes.<br>
                            С&nbsp;2000 года Россельхозбанк успешно осуществляет свою деятельность на&nbsp;территории Ростовской области через Ростовский региональный филиал. Ростовский филиал АО&nbsp;«Россельхозбанк» предоставляет банковские услуги в&nbsp;городе Ростове-на-Дону и&nbsp;всех районах Ростовской области, обладая обширной сетью из&nbsp;46&nbsp;точек продаж.<br></div>
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
                    <a href="#lending" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                        <span class="btn__text ">Заявка на кредит</span>
                    </a>
                </div>
            </div>
            <div class="block-text__right">
                <div class="user-text text-default animate" data-animate="" data-animate-delay="2"><b>Необходимый пакет документов:</b><br>
                    <ul>
                        <li>Анкета;</li>
                        <li>Учредительные и регистрационные документы юридического лица/индивидуального предпринимателя;</li>
                        <li>Финансовая отчетность;</li>
                        <li>Документы по хозяйственной деятельности. Более подробный список документов Вы можете уточнить в офисе кредитной организации.</li>
                    </ul><br>
                    <br>
                    <p>Более подробный список документов Вы можете уточнить в офисе кредитной организации.</p></div>
            </div>
        </div>
        <div class="block-text__actions block-text__actions--adaptive mt-40" data-animate="">
            <a href="#lending" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                <span class="btn__text ">Заявка на кредит</span>
            </a>
        </div>
    </div>
</div>