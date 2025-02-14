<?php
$data = array(
    array(
        'img' => '/public/img/specificarions/item_1.svg',
        'title' => 'Тип будівлі:',
        'text' => 'монолітно-каркасний'
    ),
    array(
        'img' => '/public/img/specificarions/item_2.svg',
        'title' => 'Матеріали стін:',
        'text' => 'керамічний блок, міжкімнатна звукоізоляція керамзитобетонним блоком'
    ),
    array(
        'img' => '/public/img/specificarions/item_3.svg',
        'title' => 'Опалення',
        'text' => 'індивідуальне газове'
    ),
    array(
        'img' => '/public/img/specificarions/item_4.svg',
        'title' => 'Вентиляція:',
        'text' => 'приточно-витяжна'
    ),
    array(
        'img' => '/public/img/specificarions/item_5.svg',
        'title' => 'Ліфти:',
        'text' => 'пасажирські - 2 шт., вантажні - 2 шт'
    ),
    array(
        'img' => '/public/img/specificarions/item_6.svg',
        'title' => 'Інтернет:',
        'text' => 'високошвидкісний'
    )
);

$dataSpecs = array(
    array(
        'title' => '2700 мм',
        'text' => 'Висота стель'
    ),
    array(
        'title' => '10',
        'text' => 'Кількість поверхів'
    ),
    array(
        'title' => '72 шт',
        'text' => 'Паркомісць у підземному паркінгу'
    )
);
?>

<section id="about-project" class="about-project">
    <h3 class="title">
        Про проект
    </h3>
    <span class="line"></span>
    <div>
        <h4 class="sub-title">
            Архітектура, створена для Вас:
        </h4>
        <div class="main-style-text about-project__wrp-text">
            <div class="about-project__wrp-list">
                <ul>
                    <li>
                        <strong>
                            Стильний фасад, виконаний за технологією Baumit, що гармонійно вписується в морський пейзаж,
                        </strong>
                        поєднує сучасні архітектурні рішення та природні матеріали (стіни виконані з керамічного блоку КЕРАТЕРМ), створюючи естетично привабливий образ комплексу.
                    </li>
                    <li>
                        <strong>
                            Панорамні вікна
                        </strong>
                        не лише наповнюють квартири природним світлом, але й відкривають
                        <strong>
                            захоплюючі панорами морського горизонту.
                        </strong>
                        Кожен день ви зможете насолоджуватися змінами морського пейзажу, не виходячи з дому.
                    </li>
                </ul>
            </div>
            <div class="about-project__wrp-list">
                <ul>
                    <li>
                        <strong>
                            Продумана вентиляційна система
                        </strong>
                        забезпечує постійний приплив свіжого морського повітря, створюючи в квартирах здоровий мікроклімат.
                    </li>
                    <li>
                        <strong>
                            Кожна деталь – від шумоізоляції з використанням інноваційних матеріалів до спеціальних ніш для кондиціонерів
                        </strong>
                        – ретельно продумана для забезпечення максимального комфорту мешканців.
                    </li>
                    <li>
                        <strong>
                            Єдиний стиль оформлення лобі, холлів та загальних зон
                        </strong>
                        створює атмосферу гармонії та елегантності, підкреслюючи статусність комплексу.
                    </li>
                </ul>
            </div>
        </div>
        <span class="line"></span>
        <h4 id="infrastructure-and-comfort" class="sub-title">
            Інноваційні рішення для комфортного життя:
        </h4>
        <div class="main-style-text about-project__wrp-text">
            <div class="about-project__wrp-list">
                <ul>
                    <li>
                        Енергоефективне індивідуальне опалення в кожній квартирі
                    </li>
                    <li>
                        Сучасна система вентиляції для свіжого морського повітря
                    </li>
                    <li>
                        Безшумні ліфти, виробництва XIZI, забезпечать комфортне пересування
                    </li>
                    <li>
                        Автоматичне освітлення загальних зон для економії енергії та зручності мешканців
                    </li>
                </ul>
            </div>
            <div class="about-project__wrp-list">
                <ul>
                    <li>
                        Високошвидкісний інтернет у кожній квартирі
                    </li>
                    <li>
                        Надійні вхідні двері з додатковою звукоізоляцією
                    </li>
                    <li>
                        Монолітно-каркасна конструкція будинку забезпечує міцність та довговічність
                    </li>
                    <li>
                        Використання екологічно чистих матеріалів
                    </li>
                </ul>
            </div>
        </div>
        <span class="line"></span>
        <h4 class="sub-title about-project__title">
            Технічні характеристики:
        </h4>
        <div class="about-project__specif-list">
            <?php foreach ($data as $item): ?>
                <div class="about-project__specif-item">
                    <img class="about-project__specif-item-img" src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>">
                    <p class="about-project__specif-item-title">
                        <?= $item['title'] ?>
                    </p>
                    <p class="about-project__specif-item-text">
                        <?= $item['text'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="about-project__specif-list">
            <?php foreach ($dataSpecs as $item): ?>
                <div class="about-project__specif-item">
                    <p class="about-project__title-style">
                        <?= $item['title'] ?>
                    </p>
                    <p class="about-project__specif-item-title">
                        <?= $item['text'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>