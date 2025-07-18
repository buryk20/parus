<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/phone.php'; // путь от текущего файла
?>


<footer class="footer">
    <div class="footer__wrp">
        <div class="footer__wrp-cont">
            <img src="/public/img/footer-logo.svg" alt="footer logo">
            <div class="footer__wrp-info">
                <div class="footer__nav">
                    <a class="footer__nav-item" href="#about-complex">Про комплекс</a>
                    <a class="footer__nav-item" href="#why-choose">Переваги</a>
                    <a class="footer__nav-item" href="#planning">Планування</a>
                    <a class="footer__nav-item" href="#infrastructure-and-comfort">Інфраструктура та комфорт</a>
                    <a class="footer__nav-item" href="#life">Галерея</a>
                    <a class="footer__nav-item" href="#advice">Консультація
                    </a>
                </div>
                <!-- <div class="footer__social-wrp">
                    <a href="#">
                        <img src="/public/icon/footer-inst.svg" alt="instagram">
                    </a>
                    <a href="#">
                        <img src="/public/icon/footer-facebook.svg" alt="facebook">
                    </a>
                    <a href="#">
                        <img src="/public/icon/footer-youtube.svg" alt="youtube">
                    </a>
                </div> -->
                <div class="footer__map-wrp">
                    <p class="footer__map-text">
                        м. Південне,
                    </p>
                    <p class="footer__map-text">
                        вул. Приморська, 1
                    </p>
                    <a class="footer__tel" href="tel:<?= $phoneHref ?>"><?= $phone ?></a>
                </div>
            </div>

        </div>
    </div>
</footer>