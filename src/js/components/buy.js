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
        // const lineHeight = getComputedStyle(paragraphs[2]).lineHeight;

        // console.log(getComputedStyle(paragraphs[1]));
        // console.log(paragraphs[2].offsetHeight);
        // console.log(paragraphs[2].getBoundingClientRect().height);
        // console.log(paragraphs[1].getBoundingClientRect().height);
        // console.log(paragraphs[2].offsetHeight);
        // console.log(paragraphs[2].getBoundingClientRect().height);

        
        // console.log('Line height: ', lineHeight);

        let sum = 0;

        paragraphs.forEach(el => {
            sum = sum + el.offsetHeight
        });


        // console.log(sum);
        // console.log(sum + (16 * paragraphs.length) + heightTextActive);
        // console.log(heightText);
        // console.log(heightTextActive);
        
        

        textWrp.style.setProperty('--height-text-active', heightTextActive + 'px');
        
        btn.addEventListener('click', () => {
            textWrp.classList.toggle('active');
            textWrp.style.setProperty('--height-text', (sum + 24 + (32 * paragraphs.length) + heightTextActive) + 'px');

            if(btnText.innerText === "ЧИТАТИ ДАЛI") {
                btnText.innerText = "Згорнути"; 
            } else {
                btnText.innerText = "ЧИТАТИ ДАЛI";
            }
        })
    }
}