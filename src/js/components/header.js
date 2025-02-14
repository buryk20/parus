export let header = function() {
    const header = document.querySelector('[data-header]');

    if(header) {
        const menuBtn = header.querySelector('[data-menu-btn]');
        const nav = header.querySelector('[data-nav]');
        const menuBtnClose = header.querySelector('[data-btn-close]');
        const body = document.querySelector('body');
        const anchorList = header.querySelectorAll('[data-anchor]');
        
        menuBtn.addEventListener('click', () => {
            nav.classList.add('active');
            body.classList.add('active');
        });

        menuBtnClose.addEventListener('click', () => {
            nav.classList.remove('active');
            body.classList.remove('active');
        });

        anchorList.forEach(el => {
            el.addEventListener('click', () => {
                nav.classList.remove('active');
                body.classList.remove('active');
            });
        });
    }
}