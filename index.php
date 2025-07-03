<?php
$viteServer = 'http://127.0.0.1:5173';
$devMode = @file_get_contents($viteServer . '/@vite/client') !== false;

// Путь к манифесту
$manifestPath = __DIR__ . '/public/assets/.vite/manifest.json';

// Загружаем данные из манифеста (если в продакшене)
$manifest = [];
if (!$devMode && file_exists($manifestPath)) {
    $manifest = json_decode(file_get_contents($manifestPath), true);
}

// Функция для получения пути к файлу из манифеста
function assetPath($entry)
{
    global $manifest;
    return isset($manifest[$entry]['file']) ? $manifest[$entry]['file'] : $entry;
}

$jsFile = assetPath('src/js/index.js');
$cssFile = isset($manifest['src/js/index.js']['css'][0]) ? $manifest['src/js/index.js']['css'][0] : null;

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЖК «Парус» – Ваш приватний острів біля моря в Южному!</title>

    <meta name="description" content="ЖК «Парус» – Ваш приватний острів біля моря в Южному. Комфортні апартаменти та інфраструктура для вашого життя біля моря." />

    <link rel="icon" href="/public/favicon.ico" type="image/x-icon">

    <meta property="og:site_name" content="ЖК «Парус»" />
    <meta property="og:title" content="ЖК «Парус» – Ваш приватний острів біля моря в Южному" />
    <meta property="og:description" content="ЖК «Парус» – Ваш приватний острів біля моря в Южному! Ідеальне місце для комфортного життя з видом на море та розвиненою інфраструктурою." />
    <meta property="og:image" content="https://parus.transmet.com.ua/public/img/logo-telegram.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://parus.transmet.com.ua/">
    <meta property="og:type" content="website">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5WXTXSNB');
    </script>
    <!-- End Google Tag Manager -->

    <?php if ($devMode): ?>
        <script type="module" src="<?= $viteServer ?>/@vite/client"></script>
        <script type="module" src="<?= $viteServer ?>/src/js/index.js"></script>
    <?php else: ?>
        <?php if ($cssFile): ?>
            <link rel="stylesheet" href="/public/assets/<?= $cssFile ?>">
        <?php endif; ?>
        <?php if ($jsFile): ?>
            <script src="/public/assets/<?= $jsFile ?>" defer></script>
        <?php endif; ?>
    <?php endif; ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WXTXSNB"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php require_once('views/partials/header.php'); ?>
    <main class="main">
        <?php require_once('views/components/banner.php'); ?>
        <div class="line__wrp">
            <span class="line"></span>
        </div>
        <?php require_once('views/components/block-under-banner.php'); ?>
        <?php require_once('views/components/tour.php'); ?>
        <?php require_once('views/components/why-choose.php'); ?>
        <?php
        $data = array(
            'title' => "Ціни</br> від 760$ за м2!",
            'text' => 'Це ваша можливість інвестувати в комфортне житло за доступною ціною'
        );
        extract($data);
        require('views/components/feedback.php');
        ?>
        <?php require_once('views/components/planning.php'); ?>
        <?php require_once('views/components/about-project.php'); ?>
        <?php require_once('views/components/separator.php'); ?>
        <?php
        $data = array(
            'title' => "Сплатіть лише 30% вартості",
            // 'subText' =>  'одразу, а решту — протягом 2 років.',
            'text' => 'Житло, яке ви завжди хотіли,
доступне вже сьогодні!'
        );
        extract($data);
        require('views/components/feedback.php');
        ?>
        <?php require_once('views/components/life.php'); ?>
        <?php require_once('views/components/green-block.php'); ?>
        <?php require_once('views/components/buy-apartment.php'); ?>
        <?php require_once('views/components/open-form.php'); ?>
    </main>
    <?php require_once('views/partials/footer.php'); ?>
    <div data-alert-wrp class="overlay">
        <div data-alert class="modal alert">
            <div data-alert-btn-close class="alert__btn-close">
                <span class="alert__btn-close-t"></span>
                <span class="alert__btn-close-b"></span>
            </div>
            <p class="title alert__title">
                Дякуємо!</br>
                Ваші дані отримано.
            </p>
            <p class="alert__text">
                Ми зв'яжемось з вами найближчим часом
            </p>
            <a class="btn-white" href="tel:+380957005055">+380 95 700 50 55</a>
        </div>
    </div>
</body>

</html>