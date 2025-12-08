document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submit');
    const firstNameInput = document.getElementById('fname');
    const thankYouMessage = document.getElementById('thankyoumsg');

    submitButton.addEventListener('click', function () {
        thankYouMessage.classList.add('cover');
        const firstName = firstNameInput.value;
        thankYouMessage.innerHTML = `<h2>Thank you for your feedback ${firstName}!</h2>` +
                                    `<p>Your feedback will be passed on to the appropriate team.<br> We appreciate you taking the time to share your thoughts with us.</p>`;
    });    
});