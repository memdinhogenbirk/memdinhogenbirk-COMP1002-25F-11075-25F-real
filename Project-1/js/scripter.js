document.addEventListener('DOMContentLoaded', function () {
    const slides = document.getElementById('scrollingimages');
    const previous = document.querySelector('.previous');
    const next = document.querySelector('.next');

    let currentIndex = 0;
    function nextSlide() {
        slides.classList.remove('slide0', 'slide1', 'slide2');
        slides.classList.add('slide' + currentIndex);
    };
    previous.addEventListener('click', function() {
        if(currentIndex > 0){
            currentIndex --;
        }
        else if(currentIndex == 0){
            currentIndex = 2;
        }
        nextSlide();
    });
    next.addEventListener('click', function() {
        if(currentIndex < 2){
            currentIndex ++;
        }
        else if(currentIndex == 2){
            currentIndex = 0;
        }
        nextSlide();
    });
});