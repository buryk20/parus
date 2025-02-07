export let planning = function() {
    const planning = document.querySelector('[data-planning]');

    if(planning) {
        const listWrp = planning.querySelector('[data-planning-list-wrp]');
        const list = planning.querySelector('[data-planning-list]');
        const btnOpen = planning.querySelector('[data-planning-btn-open]');
        const item = planning.querySelectorAll('[data-planning-item]');
        const text = planning.querySelector('[data-planning-text]');

        let heightItem = item[0].offsetHeight;
        let height = list.offsetHeight

        listWrp.style.setProperty('--height-planning', heightItem + 'px');

        btnOpen.addEventListener('click', () => {
            listWrp.classList.toggle('active');
            listWrp.style.setProperty('--height-planning-active', height + 'px');
            console.log(text.innerText);
            
            if(text.innerText === "ПЕРЕГЛЯНУТИ ВСI ДОСТУПНI ПЛАНУВАННЯ") {
                text.innerText = "Закрити проекти"; 
            } else {
                text.innerText = "ПЕРЕГЛЯНУТИ ВСI ДОСТУПНI ПЛАНУВАННЯ";
            }
            
        });
    }
}