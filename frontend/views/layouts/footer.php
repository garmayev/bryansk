<?php
$branch = \common\models\Branch::findOne(\Yii::$app->session->get('branch'));
$cleanPhone = preg_replace('/[\ \(\)\+\-]/', '', $branch->phone);
?>
<footer class="footer">
    <div class="footer__contacts">
        <div class="footer__contacts-wrapper wrapper wrap-pr-1 wrap-pl-1">
            <ul class="footer__contacts-list">
                <li class="footer__contacts-item" data-animate="">
                    <span class="footer__contacts-item-label text-default">Телефон</span>
                    <a class="footer__contacts-item-link" href="tel:<?= $cleanPhone ?>" data-link-animate="">
                        <?= $branch->phone ?></a>
                </li>
                <li class="footer__contacts-write-us" data-animate="" data-animate-delay="2">
                    <a href="#write_us" class="btn btn--empty btn--hover-white btn--large" data-modal=""
                       data-effect="mfp-move-from-left">
                        <span class="btn__text btn__text--small">Напишите нам</span>
                    </a>
                </li>
            </ul>
            <ul class="footer__contacts-social footer__social-list" data-animate="" data-animate-sequence="">
                <li class="footer__social-item">
                    <a href="https://vk.com/oktyabrskoe_rsm?ysclid=m3ec7if5u7727949514" target="_blank"
                       class="footer__social-link footer__social-link--vk" aria-label="VK">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M21.9 7.7L22 7.8C22.2 8.2 21.6 9.2 20.4 10.7C20.2 11 20 11.2 19.7 11.6C19.4 11.9 19.2 12.2 19.1 12.3C19 12.4 18.9 12.6 18.8 12.8C18.7 13 18.6 13.1 18.7 13.2C18.7 13.3 18.8 13.4 18.8 13.5C18.9 13.7 19 13.9 19.2 14C19.4 14.1 19.6 14.3 19.8 14.5C19.8 14.5 19.8 14.5 19.9 14.5C20.9 15.4 21.5 16.1 21.9 16.7C21.9 16.7 21.9 16.8 22 16.8C22 16.9 22 16.9 22.1 17.1C22.1 17.2 22.1 17.3 22.1 17.4C22.1 17.5 22 17.6 21.8 17.7C21.7 17.8 21.4 17.8 21.2 17.8H18.5C18.3 17.8 18.1 17.8 17.9 17.7C17.7 17.6 17.5 17.6 17.4 17.5L17.2 17.4C17 17.3 16.7 17 16.5 16.8C16.2 16.5 16 16.3 15.8 16C15.6 15.8 15.4 15.6 15.2 15.4C15 15.2 14.8 15.2 14.6 15.2C14.6 15.2 14.6 15.2 14.5 15.2C14.5 15.2 14.4 15.3 14.3 15.3C14.2 15.4 14.1 15.5 14.1 15.6C14 15.7 14 15.9 13.9 16.1C13.8 16.3 13.8 16.6 13.8 16.9C13.8 17 13.8 17.1 13.8 17.2C13.8 17.3 13.7 17.3 13.7 17.4V17.5C13.6 17.6 13.4 17.7 13.1 17.7H11.8C11.3 17.7 10.8 17.7 10.3 17.5C9.8 17.4 9.3 17.2 8.9 17C8.5 17 8.1 16.8 7.8 16.6C7.5 16.4 7.3 16.2 7.1 16L6.8 15.8C6.8 15.7 6.7 15.6 6.5 15.5C6.4 15.3 6.2 15 5.8 14.5C5.4 14.1 5.1 13.6 4.7 13C4.3 12.5 3.9 11.8 3.4 10.9C2.9 10 2.5 9.1 2.1 8.2C2 8.1 2 8 2 7.9C2 7.8 2 7.8 2 7.7V7.6C2.1 7.5 2.3 7.4 2.6 7.4H5.5C5.6 7.4 5.7 7.4 5.7 7.5C5.8 7.5 5.8 7.6 5.9 7.6H6C6.1 7.7 6.2 7.8 6.2 8C6.3 8.3 6.5 8.7 6.7 9C6.9 9.4 7 9.7 7.1 9.8L7.3 10.1C7.5 10.5 7.7 10.8 7.9 11.1C8.1 11.4 8.3 11.6 8.4 11.8C8.5 12 8.7 12.2 8.8 12.2C9 12.3 9.1 12.4 9.2 12.4C9.3 12.4 9.4 12.4 9.5 12.3C9.5 12.3 9.5 12.3 9.6 12.2C9.6 12.2 9.7 12.1 9.7 12C9.8 11.9 9.8 11.7 9.8 11.5C9.8 11.3 9.9 11 9.9 10.7C9.9 10.4 9.9 9.9 9.9 9.4C9.9 9.1 9.9 8.9 9.8 8.7C9.8 8.5 9.7 8.3 9.7 8.2H9.6C9.4 8 9.1 7.8 8.7 7.8C8.6 7.8 8.6 7.7 8.8 7.6C8.8 7.4 9 7.3 9.1 7.2C9.5 7.1 10.3 7 11.6 7C12.2 7 12.6 7.1 13 7.1C13.1 7.1 13.3 7.2 13.3 7.2C13.4 7.3 13.5 7.3 13.5 7.4C13.5 7.5 13.6 7.6 13.6 7.7C13.6 7.8 13.6 8 13.6 8.2C13.6 8.4 13.6 8.6 13.6 8.8C13.6 9 13.6 9.2 13.6 9.5C13.6 9.8 13.6 10.1 13.6 10.3C13.6 10.4 13.6 10.5 13.6 10.7C13.6 10.9 13.6 11.1 13.6 11.2C13.6 11.3 13.6 11.4 13.6 11.6C13.6 11.8 13.7 11.9 13.7 12C13.8 12.1 13.8 12.2 13.9 12.2C14 12.2 14 12.2 14.1 12.2C14.2 12.2 14.3 12.2 14.4 12.1C14.5 12 14.7 11.9 14.8 11.8C14.9 11.7 15.1 11.4 15.3 11.1C15.5 10.8 15.8 10.4 16 10C16.4 9.3 16.8 8.6 17.1 7.7C17.1 7.6 17.2 7.6 17.2 7.5L17.3 7.4H17.4C17.4 7.4 17.4 7.4 17.5 7.4C17.6 7.4 17.7 7.4 17.7 7.4H20.7C21 7.4 21.2 7.4 21.4 7.4C21.8 7.6 21.9 7.6 21.9 7.7Z"
                            ></path>
                        </svg>
                        <span class="footer__social-text">VK</span>
                    </a>
                </li>
                <li class="footer__social-item" style="opacity: 1; transform: translate(0px, 0px);">
                    <a href="https://www.youtube.com/channel/UCv1vcgXvau6uKSg6rDAGlzg" target="_blank" class="footer__social-link footer__social-link--youtube" aria-label="Youtube">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9103 4.46645C20.819 4.7177 21.5356 5.45318 21.7802 6.38624C22.2348 8.09051 22.2173 11.6429 22.2173 11.6429C22.2173 11.6429 22.2173 15.1773 21.7804 16.8817C21.5356 17.8146 20.8192 18.5502 19.9103 18.8013C18.2499 19.25 11.6087 19.25 11.6087 19.25C11.6087 19.25 4.98472 19.25 3.30705 18.7836C2.39812 18.5323 1.68166 17.7967 1.4369 16.8638C1 15.1773 1 11.625 1 11.625C1 11.625 1 8.09051 1.4369 6.38624C1.68149 5.45335 2.4156 4.69975 3.30688 4.44867C4.96724 4 11.6085 4 11.6085 4C11.6085 4 18.2499 4 19.9103 4.46645ZM14.9239 11.625L9.61957 14.6087V8.6413L14.9239 11.625Z"></path>
                        </svg>
                        <span class="footer__social-text">Youtube</span>
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://t.me/oktyabrskoersm" target="_blank"
                       class="footer__social-link footer__social-link--telegram" aria-label="Telegram">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.84784 14.5451L9.517 19.0122C9.99034 19.0122 10.1953 18.817 10.4412 18.5827L12.6604 16.5467L17.2588 19.7794C18.1022 20.2306 18.6964 19.993 18.9239 19.0346L21.9423 5.45712L21.9431 5.45632C22.2106 4.25952 21.4923 3.79153 20.6706 4.08512L2.9285 10.6059C1.71764 11.0571 1.73598 11.7051 2.72267 11.9987L7.25861 13.3531L17.7947 7.02431C18.2905 6.70911 18.7414 6.88351 18.3705 7.19871L9.84784 14.5451Z"
                                fill="#efeff2"
                            ></path>
                        </svg>
                        <span class="footer__social-text">Telegram</span>
                    </a>
                </li>
                <li class="footer__social-item" style="opacity: 1; transform: translate(0px, 0px);">
                    <a href="https://rutube.ru/channel/1181478/" target="_blank" class="footer__social-link footer__social-link--youtube" aria-label="Tutube">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9103 4.46645C20.819 4.7177 21.5356 5.45318 21.7802 6.38624C22.2348 8.09051 22.2173 11.6429 22.2173 11.6429C22.2173 11.6429 22.2173 15.1773 21.7804 16.8817C21.5356 17.8146 20.8192 18.5502 19.9103 18.8013C18.2499 19.25 11.6087 19.25 11.6087 19.25C11.6087 19.25 4.98472 19.25 3.30705 18.7836C2.39812 18.5323 1.68166 17.7967 1.4369 16.8638C1 15.1773 1 11.625 1 11.625C1 11.625 1 8.09051 1.4369 6.38624C1.68149 5.45335 2.4156 4.69975 3.30688 4.44867C4.96724 4 11.6085 4 11.6085 4C11.6085 4 18.2499 4 19.9103 4.46645ZM14.9239 11.625L9.61957 14.6087V8.6413L14.9239 11.625Z"></path>
                        </svg>
                        <span class="footer__social-text">Rutube</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__main">
        <div class="footer__main-grid wrapper wrap-pl-1 wrap-pr-1">
            <div class="footer__logo">
                <span class="footer__logo-wrapper">
                    <div class="n-logo-t">
                        <a href="/"><img src="/images/logo_white.png" alt="" style="width: 250px;"></a>
                    </div>
                </span>
            </div>
            <div class="footer__actions">
                <ul class="footer__action-list">
                    <li class="footer__action">
                        <p class="subscribe-descr text-default">Официальный дилер Ростсельмаш<br />Компания <?= $branch->title ?></p>
                    </li>
                    <li class="footer__action">
                        <a href="tel:<?= $cleanPhone ?>" class="text-link text-default" target="_blank"><?= $branch->phone ?></a>
                    </li>
                    <li class="footer__action">
                        <a href="mailto:<?= $branch->email ?>" class="text-link text-default" target="_blank"><?= $branch->email ?></a>
                    </li>
                </ul>
            </div>
            <div class="footer__nav">
                <ul class="footer__nav-list">
                    <li class="footer__nav-item">
                        <a href="/products/" class="footer__nav-item-link"
                           data-link-animate="primary">Техника</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/finance/index" class="footer__nav-item-link" data-link-animate="primary">Финансирование</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/systems/" class="footer__nav-item-link"
                           data-link-animate="primary">Точное земледелие</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/finance/specials" class="footer__nav-item-link">Акции</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/site/about" class="footer__nav-item-link" data-link-animate="primary">Компания</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/parts/qr" class="footer__nav-item-link" data-link-animate="primary">Заявка на
                            ремонт</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/parts/index" class="footer__nav-item-link" data-link-animate="primary">Запчасти
                            и сервис</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="/site/contact" class="footer__nav-item-link"
                           data-link-animate="primary">Контакты</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="https://blog.rostselmash.com/" class="footer__nav-item-link"
                           data-link-animate="primary">Блог Ростсельмаш</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="https://agrotronic.rostselmash.com/cas/login?service=https%3A%2F%2Fagrotronic.rostselmash.com" class="footer__nav-item-link"
                           data-link-animate="primary">Вход в РСМ Агротроник</a>
                    </li>
                </ul>
            </div>
            <div class="footer__address">
                <ul class="footer__address-list">
                    <?php
                    foreach (\common\models\Branch::find()->all() as $item) {
                        echo "
                    <li class='footer__address-item'>
                        <span class='footer__address-item-link slide-vertical'>
                            <span class='footer__address-item-title' style='opacity: 0.4'>{$item->region}</span><br>
                            {$item->address}
                        </span>
                    </li>
                        ";
                    }
                    ?>
                </ul>
            </div>

            <div class="footer__policy">
                <ul class="footer__policy-items">
                    <li class="footer__policy-item">
                        <a href="privacy-policy/index.htm" class="text-link text-default text-small" target="_blank">Политика
                            конфиденциальности</a>
                    </li>
                    <li class="footer__policy-item">
                        <a href="terms-of-use/index.htm" class="text-link text-default text-small" target="_blank">Пользовательское
                            соглашение</a>
                    </li>
                </ul>
            </div>
            <div class="footer__copyrights">
							<span class="footer__copyrights-text">
								© 2004-2024 АО <?= $branch->title ?>.<br/>
								Все права защищены
							</span>
            </div>
            <div class="footer__button-top">
                <button class="button-top">
                    <svg viewbox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor">
                        <path transform="rotate(180, 12, 12)"
                              d="m18.7 9.7-6 6c-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-6-6c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l5.3 5.3 5.3-5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</footer>