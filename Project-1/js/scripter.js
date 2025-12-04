document.addEventListener('DOMContentLoaded', function () {
    const slides = document.getElementById('scrollingimages');
    const previous = document.querySelector('.previous');
    const container = slides.querySelector('.slidecontainer');
    const next = document.querySelector('.next');
    const togglers = document.querySelectorAll('.gotoslide li button');
    
    let currentIndex = 0;
    function nextSlide() {
        slides.classList.remove('slide0', 'slide1', 'slide2', 'slide3');
        slides.classList.add('slide' + currentIndex);
    };
    container.addEventListener('transitionend', function () {//referenced https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Transitions
        if(currentIndex == 3){
            container.style.transition = 'none';//take away transition so the 4th image and the third image replace eachother instantly
            currentIndex = 0;
            nextSlide();
            void container.offsetWidth;
            //^this is apparently a common way to force the browser to apply css before continuing with the code. In truth, I hate that this works
            //I googled "easiest way to force css to apply before continuing with javascript code"
            container.style.transition = 'left 0.7s ease-in-out';//put back transition so everything keeps working as intended
        }
    });
    
    previous.addEventListener('click', function() {
        if(currentIndex >= 0) {
            currentIndex --;
        }
        if(currentIndex == -1) {
            currentIndex = 3;
            container.style.transition = 'none';//take away transition so the 4th image and the third image replace eachother instantly
            nextSlide();
            void container.offsetWidth;//goofy solution
            container.style.transition = 'left 0.7s ease-in-out';//put back transition so everything keeps working as intended
            currentIndex --;
        }
        nextSlide();
    });
    next.addEventListener('click', function() {
        if(currentIndex < 3) {
            currentIndex ++;
        }
        nextSlide();
    });
    togglers.forEach((element) => {
        element.addEventListener('click', function() {
            if(element.id == '0'){
                currentIndex = 0;
            };
            if(element.id == '1'){
                currentIndex = 1;
            };
            if(element.id == '2'){
                currentIndex = 2;
            };
            nextSlide();
        });
    });
});
