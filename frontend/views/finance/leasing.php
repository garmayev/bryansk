<?php

use yii\web\View;

/**
 * @var View $this
 */

echo $this->render('_menu');
$this->title = 'Лизинг';
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
                <p class="block-text__lead text-lead mb-32 animate" data-animate="">Лизинг&nbsp;— это один из&nbsp;наиболее эффективных способов приобретения техники Ростсельмаш на&nbsp;выгодных условиях</p>
                <div class="user-text text-default animate" data-animate="" data-animate-delay="1"><p>
                        Лизинговые компании-партнеры Ростсельмаш Финанс предлагают Вам программы приобретения сельскохозяйственной техники в лизинг на специальных условиях по привлекательным ценам.
                    </p>
                    <p>
                        В нашем дилерском центре Вы можете получить индивидуальную программу финансирования, а также необходимую консультационную поддержку.
                    </p>
                    <p>
                        Преимущества лизинга:
                    </p>
                    <ul style="margin-left: 0px;">
                        <li>не требуется дополнительный залог;</li>
                        <li>лояльные требования к финансовому состоянию лизингополучателя;</li>
                        <li>экономия по налогу на прибыль;</li>
                        <li>быстрые сроки принятия решения о&nbsp;финансировании;</li>
                        <li>не ухудшается отчетность.</li>
                    </ul></div>
                <div class="block-text__actions block-text__actions--desktop mt-40 animate" data-animate="" data-animate-delay="1">
                    <a href="#leasing" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                        <span class="btn__text ">Заявка на лизинг</span>
                    </a>
                </div>
            </div>
            <div class="block-text__right">
                <div class="user-text text-default animate" data-animate="" data-animate-delay="2"><h3>Условия лизинга от Ростсельмаш Финанс</h3>
                    <ul>
                        <li>Срок лизинга <b>до 7 лет</b>;</li>
                        <li>Авансовый <b>платеж от 0%</b>;</li>
                        <li>Срок принятия решения по сделке <b>до 8 часов</b>;</li>
                        <li>Полный электронный документооборот;</li>
                        <li>Единая ставка для всех клиентов без ограничений;</li>
                        <li>Гибкий график платежей;</li>
                        <li>Присутствие во всех регионах России.</li>
                    </ul></div>
            </div>
        </div>
        <div class="block-text__actions block-text__actions--adaptive mt-40" data-animate="">
            <a href="#leasing" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                <span class="btn__text ">Заявка на лизинг</span>
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
                <div class="steps-list__title animate" data-animate="">Лизингополучатель обращается к&nbsp;дилеру по&nbsp;вопросу приобретения техники Ростсельмаш в&nbsp;лизинг</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="3">
                <div class="steps-list__title animate" data-animate="">Лизингополучатель обращается в&nbsp;лизинговую компанию, предоставляет заявку и&nbsp;требуемый пакет документов</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="4">
                <div class="steps-list__title animate" data-animate="">Лизинговая компания принимает решение о&nbsp;финансировании</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="5">
                <div class="steps-list__title animate" data-animate="">Лизинговая компания и&nbsp;Лизингополучатель подписывают договор лизинга</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="6">
                <div class="steps-list__title animate" data-animate="">Лизинговая компания и дилер Ростсельмаш подписывают договор купли-продажи</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="7">
                <div class="steps-list__title animate" data-animate="">Лизингополучатель получает технику во&nbsp;владение и&nbsp;пользование</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="8">
                <div class="steps-list__title animate" data-animate="">Лизингополучатель выплачивает лизинговые платежи</div>
            </li>
            <li class="steps-list__item steps-list__item--with-dots animate" data-animate="" data-animate-delay="9">
                <div class="steps-list__title animate" data-animate="">После выплаты всех лизинговых платежей к&nbsp;Лизингополучателю переходит право собственности на&nbsp;предмет лизинга</div>
            </li>
        </ol>

    </div>
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <h2 class="h2 mb-32 mb-lg-40 mt-48 animate" data-animate="">Партнеры программы</h2>
    </div>
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <div class="partners-list">
            <div class="partners-list__item" data-animate="" data-animate-delay="1">
                <div class="card-partner">
                    <a href="" rel="nofollow sponsored" class="card-partner__link"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/698/a4rwqjd98yc3q7pp2rvryah6vmssqw3t.png" data-src="https://rostselmash.com/upload/iblock/698/a4rwqjd98yc3q7pp2rvryah6vmssqw3t.png" alt="Ростсельмаш Финанс" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">Ростсельмаш Финанс</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>Ростсельмаш Финанс предоставляет большой выбор финансовых программ, которые позволят Вам приобрести технику Ростсельмаш на наиболее выгодных условиях финансирования. Вы можете получить индивидуальную программу финансирования и консультационную поддержку у ближайшего к Вам дилера Ростсельмаш.</p></div>
                        <div class="card-partner__facts">
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Срок лизинга</div>
                                <div class="card-partner__fact-text text-default">до 7 лет</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Авансовый платеж</div>
                                <div class="card-partner__fact-text text-default">от 0%</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Срок принятия решения по сделке</div>
                                <div class="card-partner__fact-text text-default">до 8 часов</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Полный электронный документооборот</div>
                                <div class="card-partner__fact-text text-default"></div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Единая ставка</div>
                                <div class="card-partner__fact-text text-default">для всех клиентов без ограничений </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="2">
                <div class="card-partner">
                    <a href="https://www.rosagroleasing.ru/catalog/?id_product_filter=&amp;price=200&amp;price=64864461&amp;title=&amp;vendorCode=&amp;isspecialoffer=0&amp;Seller=6&amp;formName=1" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/373/92ijtmhyzmii3vqok7wofoheu6jeqiqv.png" data-src="https://rostselmash.com/upload/iblock/373/92ijtmhyzmii3vqok7wofoheu6jeqiqv.png" alt="АО «Росагролизинг»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">АО «Росагролизинг»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                АО «Росагролизинг» - лизинговая компания, созданная государством для технической и технологической модернизации отечественного АПК. Лизинговая компания предлагает сельхозтоваропроизводителям максимально выгодные условия лизинга с минимально короткими сроками заключения договоров и поставки техники. Компания занимает первое место в сегменте агролизинга.<br> Деятельность АО "Росагролизинг" охватывает все регионы РФ.
                            </p></div>
                        <div class="card-partner__facts">
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Авансовый платеж</div>
                                <div class="card-partner__fact-text text-default">от 0 %</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Удорожание</div>
                                <div class="card-partner__fact-text text-default">от 3 %</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Срок лизинга</div>
                                <div class="card-partner__fact-text text-default">до 7 лет</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Без требований к гарантийному обеспечению</div>
                                <div class="card-partner__fact-text text-default"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="3">
                <div class="card-partner">
                    <a href="https://www.sberleasing.ru/leasing/selskokhozyaystvennaya-tekhnika/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/970/vwg922ezl1l1wjfepbt3o82s3snxwxc5.png" data-src="https://rostselmash.com/upload/iblock/970/vwg922ezl1l1wjfepbt3o82s3snxwxc5.png" alt="АО «Сбербанк Лизинг»&lrm;" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">АО «Сбербанк Лизинг»&lrm;</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                СберЛизинг - одна из крупнейших российских лизинговых компаний по активам и масштабам присутствия в регионах РФ. Сберлизинг была первой компанией на рынке лизинговых услуг, предоставившей клиентам возможность электронного подписания договоров. СберЛизинг входит в крупнейшую в стране банковскую группу Сбербанк. Финансовая надежность компании ежегодно подтверждается международными кредитными агентствами. <br> СберЛизинг входит в ТОП-20 лизинговых компаний Европы по версии европейской ассоциации Leas Europe, возглавляя российскую часть списка.
                            </p></div>
                        <div class="card-partner__facts">
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Авансовый платеж </div>
                                <div class="card-partner__fact-text text-default">от 0%</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Сниженная процентная ставка лизинга</div>
                                <div class="card-partner__fact-text text-default"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="4">
                <div class="card-partner">
                    <a href="https://www.ileasing.ru/catalog/agricultural-machinery/kombayny/?arCatalogFilter_1177=1594900847&amp;arCatalogFilter_1176_MIN=&amp;arCatalogFilter_1176_MAX=&amp;set_filter=Y" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/997/jzvbbso9y36nwtsyq4n23ytjb92c0iz7.png" data-src="https://rostselmash.com/upload/iblock/997/jzvbbso9y36nwtsyq4n23ytjb92c0iz7.png" alt="ООО «Интерлизинг»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ООО «Интерлизинг»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>Основана в&nbsp;1999 году в&nbsp;Санкт-Петербурге. За&nbsp;20&nbsp;лет работы Интерлизинг зарекомендовал себя как надежный партнер. Сегодня Интерлизинг&nbsp;— это универсальная лизинговая компания, которая предоставляет широкий спектр услуг на&nbsp;всей территории России.</p>
                            <p>Компания «Интерлизинг» работает во&nbsp;всех сегментах рынка лизинга, но&nbsp;наиболее приоритетными направлениями можно назвать: лизинг легковых автомобилей, лизинг грузового автотранспорта, лизинг строительной и&nbsp;спецтехники. Конкурентным преимуществом компании является стремление подобрать индивидуальные условия лизинговой сделки для каждого клиента, учитывая особенности бизнеса.</p></div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="5">
                <div class="card-partner">
                    <a href="https://baltlease.ru/catalog-spec/filter/type-is-selskokhozyaystvennaya/mark-is-rostselmash/apply/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/e3d/ovxiuf6241iywnx0porwa2ynoiku6qni.png" data-src="https://rostselmash.com/upload/iblock/e3d/ovxiuf6241iywnx0porwa2ynoiku6qni.png" alt="ООО «Балтийский лизинг»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ООО «Балтийский лизинг»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>
                                Универсальная лизинговая компания, успешно работающая на российском рынке с 1990 года. Компания предлагает широкий спектр услуг по лизингу автотранспорта, оборудования и спецтехники. Региональная сеть компании насчитывает более 80 филиалов по всей России. «Балтийский лизинг» занял прочное место на российском рынке, завоевав доверие многочисленных клиентов, по достоинству оценивших профессионализм и качество работы компании. Компания входит в топ-10 крупнейших российских лизинговых компаний (Эксперт РА).
                            </p></div>
                        <div class="card-partner__facts">
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Авансовый платеж</div>
                                <div class="card-partner__fact-text text-default">от 0%</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Пакет документов</div>
                                <div class="card-partner__fact-text text-default">минимальный</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Срок лизинга</div>
                                <div class="card-partner__fact-text text-default">до 84 мес.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="6">
                <div class="card-partner">
                    <a href="https://www.rosbank-leasing.ru/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/558/kmogwz0d3mugi7fjb691rudy0czcsjl3.PNG" data-src="https://rostselmash.com/upload/iblock/558/kmogwz0d3mugi7fjb691rudy0czcsjl3.PNG" alt="ООО «РБ Лизинг»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16">ООО «РБ Лизинг»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32">Росбанк Лизинг (ООО «РБ ЛИЗИНГ») является дочерней компанией ПАО РОСБАНК и осуществляет свою деятельность с 2003 года.<br>
                            Росбанк Лизинг - это сбалансированная, многопрофильная компания с универсальной структурой с обширной географией деятельности.<br>
                            Отличительная особенность компании - глубокий системный подход к построению финансовой модели лизинговых сделок, постоянный мониторинг правоприменительной практики, анализ изменений в законодательстве и непрерывное совершенствование оказания лизинговых услуг. Это позволяет предлагать клиентам не только услуги по приобретению и передаче в лизинг различного оборудования, но также предоставлять профессиональные консультации по вопросам выбора оптимальных схем финансирования проектов по приобретению (модернизации, реконструкции) объектов основных фондов.</div>
                        <div class="card-partner__facts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-list__item" data-animate="" data-animate-delay="7">
                <div class="card-partner">
                    <a href="https://www.carcade.com/" rel="nofollow sponsored" class="card-partner__link" target="_blank"></a>
                    <div class="card-partner__inner">
                        <div class="card-partner__logo mb-24">
                            <img class="image is-lazy is-loaded" src="https://rostselmash.com/upload/iblock/c5c/t95fl9v944p1esy9uobb2fq771yisqnk.png" data-src="https://rostselmash.com/upload/iblock/c5c/t95fl9v944p1esy9uobb2fq771yisqnk.png" alt=" ООО «Каркаде»" data-ll-status="loaded">
                        </div>
                        <div class="card-partner__title text-lead mb-16"> ООО «Каркаде»</div>
                        <div class="card-partner__text text-default mb-16 mb-md-32"><p>CARCADE – один из лидеров рынка лизинга по итогам 2021 по данным исследования РА Эксперт. </p>

                            <p>За 25 лет работы компания профинансировала в лизинг более 235 тысяч транспортных средств, в том числе и спецтехнику. </p>

                            <p>Компания подберёт вам график на индивидуальных условиях.</p>



                            <p>Преимущества CARCADE:</p>

                            <ul>
                                <li> Сезонный график платежей</li>

                                <li> Нет лимита финансирования техники</li>

                                <li> Скидки на топливо</li>

                                <li> Бесплатный подбор спецтехники по требованиям  </li> </ul></div>
                        <div class="card-partner__facts">
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Авансовый платеж</div>
                                <div class="card-partner__fact-text text-default">от 0%</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Удорожание в год –</div>
                                <div class="card-partner__fact-text text-default">от 6% до 15%</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Срок лизинга</div>
                                <div class="card-partner__fact-text text-default">от 6 месяцев до 60 месяцев</div>
                            </div>
                            <div class="card-partner__fact">
                                <div class="card-partner__fact-label text-default text-mute">Досрочное погашение</div>
                                <div class="card-partner__fact-text text-default">после 6 месяцев</div>
                            </div>
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
                    <a href="#leasing" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                        <span class="btn__text ">Заявка на лизинг</span>
                    </a>
                </div>
            </div>
            <div class="block-text__right">
                <div class="user-text text-default animate" data-animate="" data-animate-delay="2"><b>Необходимый пакет документов:</b><br>
                    <ul>
                        <li>Анкета-заявка;</li>
                        <li>Учредительные и регистрационные документы юридического лица/индивидуального предпринимателя;</li>
                        <li>Финансовая отчетность.</li>
                    </ul></div>
            </div>
        </div>
        <div class="block-text__actions block-text__actions--adaptive mt-40" data-animate="">
            <a href="#leasing" class="btn btn--primary btn--hover-primary		   " data-modal="" data-effect="mfp-move-from-left">
                <span class="btn__text ">Заявка на лизинг</span>
            </a>
        </div>
    </div>
</div>