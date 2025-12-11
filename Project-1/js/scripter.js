document.addEventListener('DOMContentLoaded', function () {
    const slides = document.getElementById('scrollingimages');//acquire the main div that holds all the slides, id so class can be used to change slides
    const previous = document.querySelector('.previous');//previous/back button
    const next = document.querySelector('.next');//next/forward button
    const container = slides.querySelector('.slidecontainer');//acquire the container div that holds all the slides
    const togglers = document.querySelectorAll('.gotoslide li button');//acquire each header button
    
    let currentIndex = 0;
    function nextSlide() {
        slides.classList.remove('slide0', 'slide1', 'slide2', 'slide3');//third slide is duplicate of first for transition purposes
        slides.classList.add('slide' + currentIndex);//change slide by changing class, add current index number onto 'slide'
        togglers.forEach((element) => {//remove active class from all toggler buttons before adding it back to one of them below
            element.classList.remove('active');//removes active class from all buttons
        });
        togglers.forEach((element) => {//was trying to use parse in some way but realized I could just do this, it works and saved me time
        if(element.id == '0' && currentIndex == 0){
            //when id an current index match, add active class to that button, CSS highlights it, regardless if toggled by next/previous or by toggler buttons
                element.classList.add('active');
            };
        if(element.id == '1' && currentIndex == 1){
                element.classList.add('active');
            }; 
        if(element.id == '2' && currentIndex == 2){
                element.classList.add('active');
            };
        });
    };
    container.addEventListener('transitionend', function () {//referenced https://developer.mozilla.org/en-US/docs/Web/API/Element/transitionend_event
        if(currentIndex == 3){
            container.style.transition = 'none';//take away transition so the 4th image and the third image replace eachother instantly
            currentIndex = 0;//reset current index to 0
            nextSlide();//run next slide to change class back to first slide
            void container.offsetWidth;
            //^this is apparently a common way to force the browser to apply css before continuing with the code. In truth, I hate that this works
            //I googled "easiest way to force css to apply before continuing with javascript code", I got this
            //google sourced the info from https://stackoverflow.com/questions/60686489/what-purpose-does-void-element-offsetwidth-serve
            container.style.transition = 'left 0.7s ease-in-out';//put back transition so everything keeps working as intended
        }
    });
    
    previous.addEventListener('click', function() {//back button decrements currentIndex  until it hits -1, then a hidden transition between the last and first slide occurs
        if(currentIndex >= 0) {
            currentIndex --;
        }
        if(currentIndex == -1) {//using same code as even listener above, but reversed. It's down here because it works down here. If it ain't broke...
            currentIndex = 3;
            container.style.transition = 'none';
            nextSlide();
            void container.offsetWidth;//goofy solution
            container.style.transition = 'left 0.7s ease-in-out';
            currentIndex --;
        }
        nextSlide();
    });
    next.addEventListener('click', function() {//forward button increments currentIndex until it hits 3, then the event listener above kicks in to prevent it from transitioning through all the slides
        if(currentIndex < 3) {
            currentIndex ++;
        }
        nextSlide();
    });
    togglers.forEach((element) => {//using the heading buttons to go to specific slides
        element.addEventListener('click', function() {
            if(element.id == '0'){//each button has an id corresponding to the slide it goes to
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
