document.addEventListener('DOMContentLoaded', function () {
    const slides = document.getElementById('scrollingimages');
    const previous = document.querySelector('.previous');
    const container = slides.querySelector('.slidecontainer');
    const next = document.querySelector('.next');
    
    let looper = true;
    let currentIndex = 0;
    function nextSlide() {
        slides.classList.remove('slide0', 'slide1', 'slide2', 'slide3');
        slides.classList.add('slide' + currentIndex);
    };
    container.addEventListener('transitionend', function (){
        if(currentIndex == 3 && looper == true){
            container.style.transition = 'none';
            currentIndex = 0;
            nextSlide();
            void container.offsetWidth;
            container.style.transition = 'left 0.7s ease-in-out';
        }
    });
    previous.addEventListener('click', function() {
        if(currentIndex >= 0){
            currentIndex --;
            looper = false;
        }
        if(currentIndex == -1){
            currentIndex = 3;
            looper = false;
            container.style.transition = 'none';
            nextSlide();
            void container.offsetWidth;
            container.style.transition = 'left 0.7s ease-in-out';
            currentIndex --;
        }
        nextSlide();
    });
    next.addEventListener('click', function() {
        if(currentIndex < 3){
            currentIndex ++;
            looper = true;
        }
        nextSlide();
    });
});