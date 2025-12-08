document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submit');
    const firstNameInput = document.getElementById('firstName');
    const thankYouMessage = document.getElementById('thankyoumsg');

    submitButton.addEventListener('click', function () {
        thankYouMessage.classList.add('cover');
    });    
});