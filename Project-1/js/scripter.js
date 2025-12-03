document.addEventListener('DOMContentLoaded', function () {
    const slides = document.getElementById('scrollingimages');
    const previous = document.querySelector('.previous');
    const container = slides.querySelector('.slidecontainer');
    const next = document.querySelector('.next');

    let currentIndex = 0;
    function nextSlide() {
        slides.classList.remove('slide0', 'slide1', 'slide2', 'slide3');
        slides.classList.add('slide' + currentIndex);
    };
    container.addEventListener('transitionend', function (){
        if(currentIndex == 3){
            container.style.transition = 'none';
            currentIndex = 0;
            nextSlide();
            void container.offsetWidth;
            container.style.transition = 'left 0.7s ease-in-out';
        }
    });
    previous.addEventListener('click', function() {
        if(currentIndex > 0){
            currentIndex --;
        }
        else if(currentIndex == 0){
            currentIndex = 3;
        }
        nextSlide();
    });
    next.addEventListener('click', function() {
        if(currentIndex < 3){
            currentIndex ++;
        }
        else if(currentIndex == 3){
            currentIndex = 0;
        }
        nextSlide();
    });
});