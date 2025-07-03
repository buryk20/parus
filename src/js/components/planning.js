export let planning = function () {
    const planning = document.querySelector('[data-planning]');
    if (!planning) return;

    const listWrp = planning.querySelector('[data-planning-list-wrp]');
    const list = planning.querySelector('[data-planning-list]');
    const btnOpen = planning.querySelector('[data-planning-btn-open]');
    const text = planning.querySelector('[data-planning-text]');
    const items = planning.querySelectorAll('[data-planning-item]');

    if (!listWrp || !list || !btnOpen || !text || items.length === 0) return;

    const updateHeights = () => {
        const firstItemHeight = items[0].offsetHeight;
        const fullListHeight = list.offsetHeight;

        listWrp.style.setProperty('--height-planning', firstItemHeight + 'px');
        listWrp.style.setProperty('--height-planning-active', fullListHeight + 'px');
    };

    // Обновляем при загрузке и ресайзе
    window.addEventListener('load', updateHeights);
    window.addEventListener('resize', updateHeights);

    btnOpen.addEventListener('click', () => {
        listWrp.classList.toggle('active');

        const isExpanded = listWrp.classList.contains('active');
        text.innerText = isExpanded
            ? 'Закрити проекти'
            : 'Більше планувань';
    });
};
