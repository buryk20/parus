<?php
$plans = array(
    array(
        'img' => '/public/img/planning/item_1.png',
        'title' => '1 кiмнатна / 42 м2',
        'text' => 'поверх 1, кв 1'
    ),
    array(
        'img' => '/public/img/planning/item_2.png',
        'title' => '2 кiмнатна / 58 м2',
        'text' => 'поверх 1, кв 2'
    ),
    array(
        'img' => '/public/img/planning/item_3.png',
        'title' => '1 кiмнатна / 41 м2',
        'text' => 'поверх 1, кв 3'
    ),
    array(
        'img' => '/public/img/planning/item_4.png',
        'title' => '1 кiмнатна / 39 м2',
        'text' => 'поверх 1, кв 5'
    ),
    array(
        'img' => '/public/img/planning/item_5.png',
        'title' => '1 кiмнатна / 41 м2',
        'text' => 'поверх 1, кв 6'
    ),
    array(
        'img' => '/public/img/planning/item_6.png',
        'title' => '1 кiмнатна / 42 м2',
        'text' => 'поверх 1, кв 7'
    ),
    array(
        'img' => '/public/img/planning/item_7.png',
        'title' => '2 кiмнатна / 62 м2',
        'text' => 'поверх 1, кв 8'
    ),
);
?>

<section data-planning id="planning" class="planning">
    <h3 class="title">Планування</h3>
    <span class="line"></span>
    <div data-planning-list-wrp class="planning__wrp-list">
        <div data-planning-list class="planning__list">
            <?php foreach ($plans as $plan): ?>
                <div data-planning-item class="planning__item">
                    <img class="planning__img" src="<?= $plan['img'] ?>" alt="<?= $plan['title'] ?>">
                    <div>
                        <h4 class="planning__title">
                            <?= $plan['title'] ?>
                        </h4>
                        <p class="planning__text">
                            <?= $plan['text'] ?>
                        </p>
                        <button class="btn planning__btn">
                            <p>дізнатися вартість</p>
                            <img class="planning__btn-icon" src="/public/icon/arrow.svg" alt="Зателефонуйте +380 95 700 50 55">
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <button data-planning-btn-open class="btn planning__btn-open">
        <p data-planning-text>Переглянути всI доступнi Планування</p>
        <img class="planning__btn-open-icon" src="/public/icon/arrow.svg" alt="Зателефонуйте +380 95 700 50 55">
    </button>
</section>