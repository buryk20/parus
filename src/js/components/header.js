export let header = function() {
    const header = document.querySelector('[data-header]');
    console.log(header);
    

    if(header) {
        const menuBtn = header.querySelector('[data-menu-btn]');
        const nav = header.querySelector('[data-nav]');
        const menuBtnClose = header.querySelector('[data-btn-close]');
        

        menuBtn.addEventListener('click', () => {
            nav.classList.add('active');
            
        });

        menuBtnClose.addEventListener('click', () => {
            nav.classList.remove('active');
        });
    }
    
}