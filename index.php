<?php
$viteServer = 'http://127.0.0.1:5173';
$devMode = @file_get_contents($viteServer . '/@vite/client') !== false;
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

    <?php if ($devMode): ?>
        <script type="module" src="<?= $viteServer ?>/@vite/client"></script>
        <script type="module" src="<?= $viteServer ?>/src/js/index.js"></script>
    <?php else: ?>
        <link rel="stylesheet" href="/public/assets/index.css">
        <script src="/public/assets/index.js" defer></script>
    <?php endif; ?>

</head>

<body>
    <?php require_once('views/partials/header.php'); ?>
    <main>
        <?php require_once('views/components/banner.php'); ?>
        <div class="line__wrp">
            <span class="line"></span>
        </div>
        <?php require_once('views/components/block-under-banner.php'); ?>
        <?php require_once('views/components/tour.php'); ?>
        <?php require_once('views/components/why-choose.php'); ?>
        <?php require_once('views/components/feedback.php'); ?>
        <?php require_once('views/components/planning.php'); ?>
        <?php require_once('views/components/about-project.php'); ?>
    </main>
    <div data-alert class="alert">
        <p>
            Повідомлення надіслано
        </p>
    </div>

</body>

</html>