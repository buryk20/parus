<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/phone.php'; // путь от текущего файла
?>


<header data-header class="header">
    <div header-wrp class="header__wrp">
        <div class="header__menu">
            <div data-menu-btn class="header__menu-btn">
                <span class="header__menu-line-t"></span>
                <span class="header__menu-line-c"></span>
                <span class="header__menu-line-b"></span>
            </div>
        </div>
        <img class="header__logo" src="/public/img/logo-header.svg" alt="Логотип Парус">
        <div data-nav class="header__nav-wrp">
            <div class="header__nav">
                <div class="header__menu-logo-wrp">
                    <img class="header__menu-logo" src="/public/img/logo-header.png" alt="Логотип Парус">
                    <button data-btn-close class="header__menu-btn-close">
                        <span class="header__menu-line-t"></span>
                        <span class="header__menu-line-c"></span>
                        <span class="header__menu-line-b"></span>
                    </button>
                </div>
                <ul class="header__nav-list">
                    <li class="header__item">
                        <a data-anchor href="#about-complex">Про комплекс</a>
                    </li>
                    <li class="header__item">
                        <a data-anchor href="#why-choose">Переваги</a>
                    </li>
                    <li class="header__item">
                        <a data-anchor href="#planning">Планування</a>
                    </li>
                    <li class="header__item">
                        <a data-anchor href="#infrastructure-and-comfort">Інфраструктура та комфорт</a>
                    </li>
                    <li class="header__item">
                        <a data-anchor href="#life">Галерея</a>
                    </li>
                    <li class="header__item">
                        <a data-anchor href="#advice">Консультація</a>
                    </li>
                </ul>
                <a class="header__nav-menu-tel btn" href="tel:<?= $phoneHref ?>"><?= $phone ?></a>
                <button class="header__nav-menu-btn-call btn-black">Замовити дзвiНок</button>
                <p class="header__nav-menu-text">
                    Зателефонуйте нам зараз!
                </p>
                <p class="header__nav-menu-text">
                    Ми готові відповісти
                    на всі ваші запитання
                </p>
            </div>
        </div>
        <a class="btn header__btn" href="tel:<?= $phoneHref ?>"><?= $phone ?></a>
        <a class="header__mob-phone" href="tel:<?= $phoneHref ?>">
            <img src="/public/icon/phone.svg" alt="<?= $phone ?>">
        </a>
    </div>
</header>