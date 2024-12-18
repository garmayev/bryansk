<?php
/**
 * @var string $theme
 */

?>
<div class="appointment-form">
    <div class="wrapper wrap-pl-1 wrap-pr-1">
        <div class="appointment-form__head">
            <div class="appointment-form__title h2 animate" data-animate="">Запишитесь на демпоказ</div>
        </div>
        <div class="appointment-form__content">
            <div class="appointment-form__left">
                <div class="appointment-form__des">
                    <p class="text-default animate" data-animate="">
                        Оставьте контактные данные и наш специалист с вами свяжется. <br><br> Подробную информацию о
                        представленной технике уточните в нашем ДЦ.
                    </p>
                </div>
            </div>
            <div class="appointment-form__right">
                <form name="appointment-form-event" action="#" method="POST"
                      class="appointment-form__form js-validate animate" id="appointment-form-event"
                      data-parsley-validate="" data-animate="" novalidate="" data-parsley-initialized="">
                    <div class="appointment-form__col hidden">
                        <div class="field field--hidden">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="6993245EVENT_APPOINTMENT_FORM" name="EVENT_APPOINTMENT_FORM"
                                           class="input input--default not-empty" type="hidden"
                                           value="APPOINTMENT_FORM">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col hidden">
                        <div class="field field--hidden">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="6993245PROP_CLIENT_REGION" name="PROP_CLIENT_REGION"
                                           class="input input--default not-empty" type="hidden"
                                           value="Ростовская область">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col hidden">
                        <div class="field field--hidden">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="6993245FORM_IBLOCK" name="FORM_IBLOCK"
                                           class="input input--default not-empty" type="hidden" value="74">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col">
                        <div class="field theme-white">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="6993245PROP_NAME" name="PROP_NAME"
                                           class="input input--default input--white" placeholder="Имя" type="text"
                                           required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col hidden">
                        <div class="field field--hidden">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="PROP_REGION" name="PROP_REGION" class="input input--default not-empty"
                                           type="hidden" value="Ростовская область">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col">
                        <div class="field theme-white">
                            <div class="control">
                                <div class="input-shell">
                                    <input id="6993245PROP_PHONE" name="PROP_PHONE"
                                           class="input input--default input--white" placeholder="+7 (___) ___ __ __"
                                           data-mask-tel=""
                                           data-parsley-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                           type="tel" inputmode="tel" required="" data-parsley-trigger="change"
                                           data-initialized-mask="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col">
                        <div class="field theme-white">
                            <div class="control">
                                <select id="PROP_REGION_SELECT" class="select select2-hidden-accessible"
                                        name="PROP_REGION_REGION_SELECT" data-select="" data-select-size="default"
                                        data-select-theme="white" data-select-placeholder="Например, Московская область"
                                        data-select-search="true" required="" data-select2-id="PROP_REGION_SELECT"
                                        tabindex="-1" aria-hidden="true">
                                    <option label="Например, Московская область"></option>
                                    <option value="1846">
                                        Республика Башкортостан
                                    </option>
                                    <option value="2321">
                                        Республика Мордовия
                                    </option>
                                    <option value="2349">
                                        Чувашская Республика
                                    </option>
                                    <option value="2032">
                                        Приморский край
                                    </option>
                                    <option value="1844">
                                        Тюменская область
                                    </option>
                                    <option value="1596">
                                        Воронежская область
                                    </option>
                                    <option value="2458">
                                        Кировская область
                                    </option>
                                    <option value="2027">
                                        Свердловская область
                                    </option>
                                    <option value="1617">
                                        Краснодарский край
                                    </option>
                                    <option value="2301">
                                        Республика Крым
                                    </option>
                                    <option value="2039">
                                        Саратовская область
                                    </option>
                                    <option value="1608">
                                        Республика Бурятия
                                    </option>
                                    <option value="1587">
                                        Московская область
                                    </option>
                                    <option value="1602">
                                        Алтайский край
                                    </option>
                                    <option value="1610" data-select2-id="2">
                                        Ростовская область
                                    </option>
                                    <option value="22247">
                                        Чеченская Республика
                                    </option>
                                    <option value="24739">
                                        Республика Ингушетия
                                    </option>
                                    <option value="2036">
                                        Волгоградская область
                                    </option>
                                    <option value="1583">
                                        Костромская область
                                    </option>
                                    <option value="1606">
                                        Тульская область
                                    </option>
                                    <option value="2030">
                                        Республика Удмуртия
                                    </option>
                                    <option value="1590">
                                        Курская область
                                    </option>
                                    <option value="1604">
                                        Орловская область
                                    </option>
                                    <option value="1594">
                                        Белгородская область
                                    </option>
                                    <option value="2135">
                                        Пермский край
                                    </option>
                                    <option value="2034">
                                        Ставропольский край
                                    </option>
                                    <option value="2038">
                                        Пензенская область
                                    </option>
                                    <option value="1607">
                                        Калужская область
                                    </option>
                                    <option value="1609">
                                        Рязанская область
                                    </option>
                                    <option value="2041">
                                        Ленинградская Область
                                    </option>
                                    <option value="2527">
                                        Калининградская область
                                    </option>
                                    <option value="1586">
                                        Смоленская область
                                    </option>
                                    <option value="1582">
                                        Ярославская область
                                    </option>
                                    <option value="1601">
                                        Ивановская область
                                    </option>
                                    <option value="1603">
                                        Владимирская область
                                    </option>
                                    <option value="2347">
                                        Нижегородская область
                                    </option>
                                    <option value="25124">
                                        Республика Марий Эл
                                    </option>
                                    <option value="2040">
                                        Республика Татарстан
                                    </option>
                                    <option value="1588">
                                        Омская область
                                    </option>
                                    <option value="1585">
                                        Иркутская область
                                    </option>
                                    <option value="2031">
                                        Курганская область
                                    </option>
                                    <option value="2029">
                                        Оренбургская область
                                    </option>
                                    <option value="1593">
                                        Тамбовская область
                                    </option>
                                    <option value="1597">
                                        Липецкая область
                                    </option>
                                    <option value="1581">
                                        Новосибирская область
                                    </option>
                                    <option value="1592">
                                        Красноярский край
                                    </option>
                                    <option value="1599">
                                        Забайкальский край
                                    </option>
                                    <option value="2033">
                                        Амурская область
                                    </option>
                                    <option value="2336">
                                        Хабаровский край
                                    </option>
                                    <option value="1595">
                                        Томская область
                                    </option>
                                    <option value="2028">
                                        Челябинская область
                                    </option>
                                    <option value="2035">
                                        Самарская область
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col">
                        <div class="field theme-white">
                            <div class="control">
                                <select id="PROP_DEM_POKAZ" class="select select2-hidden-accessible"
                                        name="PROP_DEM_POKAZ" data-select="" data-select-size="default"
                                        data-select-theme="white" data-select-placeholder="Выберите демпоказ"
                                        required="" data-select2-id="PROP_DEM_POKAZ" tabindex="-1" aria-hidden="true">
                                    <option label="Выберите демпоказ" data-select2-id="4"></option>
                                    <option value="Агрокомплекс 2024">
                                        Агрокомплекс 2024
                                    </option>
                                    <option value="Агротехмордовия 2024">
                                        Агротехмордовия 2024
                                    </option>
                                    <option value="День картофеля">
                                        День картофеля
                                    </option>
                                    <option value="АгроЭкспоВосток">
                                        АгроЭкспоВосток
                                    </option>
                                    <option value="АПК Тюменской области">
                                        АПК Тюменской области
                                    </option>
                                    <option value="Воронежагрокомплекс">
                                        Воронежагрокомплекс
                                    </option>
                                    <option value="Агровятка">
                                        Агровятка
                                    </option>
                                    <option value="Урал-Агро 2024">
                                        Урал-Агро 2024
                                    </option>
                                    <option value="Золотая Нива 2024">
                                        Золотая Нива 2024
                                    </option>
                                    <option value="Крымский день поля">
                                        Крымский день поля
                                    </option>
                                    <option value="День Поля Ростсельмаш">
                                        День Поля Ростсельмаш
                                    </option>
                                    <option value="Выставка коз и овец">
                                        Выставка коз и овец
                                    </option>
                                    <option value="СТТ 2024">
                                        СТТ 2024
                                    </option>
                                    <option value="День Сибирского поля">
                                        День Сибирского поля
                                    </option>
                                    <option value="День Донского поля 2024">
                                        День Донского поля 2024
                                    </option>
                                    <option value="ЧеченАгроЭкспо 2024">
                                        ЧеченАгроЭкспо 2024
                                    </option>
                                    <option value="День поля 2024">
                                        День поля 2024
                                    </option>
                                    <option value="День Поля Россельхозцентр">
                                        День Поля Россельхозцентр
                                    </option>
                                    <option value="Республиканский День Поля 2024">
                                        Республиканский День Поля 2024
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День Сибирского поля">
                                        День Сибирского поля
                                    </option>
                                    <option value="Агропромышленный фестиваль Agro Pro-2024">
                                        Агропромышленный фестиваль Agro Pro-2024
                                    </option>
                                    <option value="День тракториста-машиниста">
                                        День тракториста-машиниста
                                    </option>
                                    <option value="Воронежский ДП">
                                        Воронежский ДП
                                    </option>
                                    <option value="Курская Коренская ярмарка">
                                        Курская Коренская ярмарка
                                    </option>
                                    <option value="Орловский ДП">
                                        Орловский ДП
                                    </option>
                                    <option value="Белгородский ДП">
                                        Белгородский ДП
                                    </option>
                                    <option value="Областной День поля">
                                        Областной День поля
                                    </option>
                                    <option value="Всероссийский день поля 2024">
                                        Всероссийский день поля 2024
                                    </option>
                                    <option value="День поля РБ">
                                        День поля РБ
                                    </option>
                                    <option value="Областная агротехнологическая выставка День Поля">
                                        Областная агротехнологическая выставка День Поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="Областной день Поля">
                                        Областной день Поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="Агроволга 2024">
                                        Агроволга 2024
                                    </option>
                                    <option value="Агро-Омск 2024">
                                        Агро-Омск 2024
                                    </option>
                                    <option value="День поля Республики Бурятия">
                                        День поля Республики Бурятия
                                    </option>
                                    <option value="День поля в Иркутской области">
                                        День поля в Иркутской области
                                    </option>
                                    <option value="Иннопром">
                                        Иннопром
                                    </option>
                                    <option value="День Уральского поля">
                                        День Уральского поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="Областной День поля">
                                        Областной День поля
                                    </option>
                                    <option value="Тамбовский ДП">
                                        Тамбовский ДП
                                    </option>
                                    <option value="Липецкий ДП">
                                        Липецкий ДП
                                    </option>
                                    <option value="День поля 2024">
                                        День поля 2024
                                    </option>
                                    <option value="День поля риса">
                                        День поля риса
                                    </option>
                                    <option value="Волгоград АГРО">
                                        Волгоград АГРО
                                    </option>
                                    <option value="День Поля Алексеевского р-на">
                                        День Поля Алексеевского р-на
                                    </option>
                                    <option value="Саратов-Агро 2024 + День цифрового поля">
                                        Саратов-Агро 2024 + День цифрового поля
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="День поля в Новосибирской области">
                                        День поля в Новосибирской области
                                    </option>
                                    <option value="День поля в Красноярском крае">
                                        День поля в Красноярском крае
                                    </option>
                                    <option value="День поля 2024">
                                        День поля 2024
                                    </option>
                                    <option value="Амурский день поля">
                                        Амурский день поля
                                    </option>
                                    <option value="День поля в Приморском крае">
                                        День поля в Приморском крае
                                    </option>
                                    <option value="День поля в Еврейской АО">
                                        День поля в Еврейской АО
                                    </option>
                                    <option value="День поля в Томской области">
                                        День поля в Томской области
                                    </option>
                                    <option value="День поля">
                                        День поля
                                    </option>
                                    <option value="АгроПромКрым">
                                        АгроПромКрым
                                    </option>
                                    <option value="День Поля Ставропольского края">
                                        День Поля Ставропольского края
                                    </option>
                                    <option value="МинводыАгро 2024">
                                        МинводыАгро 2024
                                    </option>
                                    <option value="День Поля Ставропольского края">
                                        День Поля Ставропольского края
                                    </option>
                                    <option value="XXVI Поволжская выставка">
                                        XXVI Поволжская выставка
                                    </option>
                                    <option value="АгроРусь">
                                        АгроРусь
                                    </option>
                                    <option value="БелгородАгро-2024">
                                        БелгородАгро-2024
                                    </option>
                                    <option value="Агросалон 2024">
                                        Агросалон 2024
                                    </option>
                                    <option value="Волгоград АГРО">
                                        Волгоград АГРО
                                    </option>
                                    <option value="Золотая осень. Урожай 2024">
                                        Золотая осень. Урожай 2024
                                    </option>
                                    <option value="Агропромышленная неделя в Иркутской области">
                                        Агропромышленная неделя в Иркутской области
                                    </option>
                                    <option value="Югагро 2024">
                                        Югагро 2024
                                    </option>
                                    <option value="Сибирская аграрная неделя 2024">
                                        Сибирская аграрная неделя 2024
                                    </option>
                                    <option value="Агропромышленный форум Сибири. Награждение передовиков Красноярского края">
                                        Агропромышленный форум Сибири. Награждение передовиков Красноярского края
                                    </option>
                                    <option value="Сибирская агропромышленная выставка">
                                        Сибирская агропромышленная выставка
                                    </option>
                                    <option value="Агрономический форум">
                                        Агрономический форум
                                    </option>
                                    <option value="День Белгородского поля 2024">
                                        День Белгородского поля 2024
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col mt-16 mt-md-0">
                        <div class="appointment-form__privacy">
                            <div class="field theme-white">
                                <div class="control">
                                    <label class="checkbox checkbox--white ">
                                        <input type="checkbox" class="checkbox__input" name="application-form-privacy"
                                               id="6993245application-form-privacy" required=""
                                               data-parsley-multiple="application-form-privacy">
                                        <span class="checkbox__box"></span>
                                        <span class="checkbox__inner">
                                            <i class="icon is-small" aria-hidden="true">
										        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
										            <rect x="1" y="1" width="22" height="22" fill="#212121"
                                                          stroke="#212121" stroke-width="2"></rect>
										            <path d="M5 12L9.66667 17L19 7" stroke="white" stroke-width="2"></path>
										        </svg>
									        </i>
								        </span>
                                        <span class="checkbox__text">Нажимая «Отправить заявку» , Вы соглашаетесь с
                                            <a href="/privacy-policy/" class="">Политикой конфиденциальности</a> и
                                            <a href="/terms-of-use/" class="">обработкой персональных данных</a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-form__col appointment-form__col--button mt-32 mt-md-16">
                        <button type="submit" class="btn btn--empty btn--hover-primary">
                            <span class="btn__text ">Отправить</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
