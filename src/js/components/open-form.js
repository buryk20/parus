export let openForm = function() {
    const form = document.querySelector("[data-open-form]");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault(); 

            const alert = document.querySelector('[data-alert]');
            const alertWrp = document.querySelector('[data-alert-wrp]');
            const btnClose = document.querySelector('[data-alert-btn-close]');

            btnClose.addEventListener('click', () => {
                alert.classList.remove('active');
                alertWrp.classList.remove('active');
            });

            const formData = new FormData(form);

            fetch('/submit-form', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert.classList.add('active');
                alertWrp.classList.add('active');
                setTimeout(() => {
                    alert.classList.remove('active');
                    alertWrp.classList.remove('active');
                }, 6000);
                form.reset();
            })
            .catch(error => console.error('Error:', error));
        });
    }
}