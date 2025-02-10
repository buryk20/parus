export let form = function() {
    const arrForm = document.querySelectorAll('[data-form]');
    if (arrForm.length > 0) {
        arrForm.forEach((form) => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const nameInput = form.querySelector('[data-name]');
                const phoneInput = form.querySelector('[data-phone]');
                const alert = document.querySelector('[data-alert]');
                const alertWrp = document.querySelector('[data-alert-wrp]');
                const btnClose = document.querySelector('[data-alert-btn-close]');

                btnClose.addEventListener('click', () => {
                    alert.classList.remove('active');
                    alertWrp.classList.remove('active');
                });

                let formData = new FormData();
                formData.append('name', nameInput.value);
                formData.append('phone', phoneInput.value);   

                fetch('/submit-form', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    alert.classList.add('active');
                    alertWrp.classList.add('active');
                    nameInput.value = '';
                    phoneInput.value = '';
                    setTimeout(() => {
                        alert.classList.remove('active');
                        alertWrp.classList.remove('active');
                    }, 6000);
                })
                .catch(error => console.error('Error:', error));
            });
        });
    }
}
