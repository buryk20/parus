export let buy = function() {
    const buy = document.querySelector('[data-buy-wrp]');

    if(buy) {
        const textActive = buy.querySelector('[data-text-active]');
        const text = buy.querySelector('[data-text]');
        const btn = buy.querySelector('[data-bue-btn-open]');
        const textWrp = buy.querySelector('[data-text-wrp]');
        const btnText = buy.querySelector('[data-bue-btn-text]');
        const paragraphs = textWrp.querySelectorAll('p');

        let heightTextActive = textActive.getBoundingClientRect().height;
        let heightText = text.getBoundingClientRect().height;

        let computedStyle = getComputedStyle(text);
        let marginTop = parseFloat(computedStyle.marginTop);
        let marginBottom = parseFloat(computedStyle.marginBottom);

        console.log(heightText, heightTextActive, marginTop, marginBottom);
        

        textWrp.style.setProperty('--height-text-active', heightTextActive + 'px');
        
        btn.addEventListener('click', () => {
            textWrp.classList.toggle('active');
            textWrp.style.setProperty('--height-text', (heightTextActive + heightText + (16 * paragraphs.length) + (9 * 16)) + 'px');

            if(btnText.innerText === "ЧИТАТИ ДАЛI") {
                btnText.innerText = "Згорнути"; 
            } else {
                btnText.innerText = "ЧИТАТИ ДАЛI";
            }
        })
    }
}