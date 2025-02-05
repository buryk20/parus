export let form = function() {
    const arrForm = document.querySelectorAll('[data-form]');
    if(arrForm) {
        arrForm[0].addEventListener('submit', function (e) {
            e.preventDefault();
    
            const nameInput = arrForm[0].querySelector('[data-name]');
            const phoneInput = arrForm[0].querySelector('[data-phone]');
            const alert = document.querySelector('[data-alert]');        
            
            let formData = new FormData();
            formData.append('name', nameInput.value);
            formData.append('phone', phoneInput.value);        
        
            fetch('/submit-form', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                alert.classList.add('active');
                nameInput.value = '';
                phoneInput.value = '';
                setTimeout(() => {
                    alert.classList.remove('active');
                }, 3000);
            })
            .catch(error => console.error('Error:', error));
        });
    }
}



