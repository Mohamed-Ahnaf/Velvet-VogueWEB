/*********************JAVASCRIPT CODE FOR PIC SALE SLIDER IN THE PAGE BY OHAMED AHNAF*******************************************************************/

let slidePosition = 0;
const sliders = document.querySelectorAll('.slider-item');
const totalSlider = sliders.length;
const btnPrev = document.querySelector('#btn-prev');
const btnNext = document.querySelector('#btn-next');

btnPrev.addEventListener('click', function() {
    prevSlide();
});
btnNext.addEventListener('click', function() {
    nextSlide();
});

function updatePosition() {
    sliders.forEach((slide, index) => {
        slide.classList.remove('active');
        slide.classList.add('hidden');
        dots[index].classList.remove('dot-active'); 
    });


    
    sliders[slidePosition].classList.add('active');
dots.forEach(dot=>{
dot.classList.remove('dot-active');

});


    dots[slidePosition].classList.add('dot-active'); 
}

function prevSlide() {
    if (slidePosition == 0) {
        slidePosition = totalSlider - 1;
    } else {
        slidePosition--;
    }
    updatePosition();
}

function nextSlide() {
    if (slidePosition == totalSlider - 1) {
        slidePosition = 0;
    } else {
        slidePosition++;
    }
    updatePosition();
}

const dotContainer = document.querySelector('.dots');

sliders.forEach(() => {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    dotContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.dot'); 

dots[slidePosition].classList.add('dot-active'); 



/*This code is for, if i click in the dot under the picture it will do to the next pic*/

dots.forEach((dot, index)=>{
    dot.addEventListener('click',function(){
        slidePosition=index;
        updatePosition();
        });
    
    });


    setInterval(nextSlide, 58000);

/****************************************************************************************/



/*JS CODE FOR RESPONSIVE NAVBAR BY MOHAMED AHNAF*****************************************************************/

const menu = document.querySelector('.menu');
const menulist = document.querySelector('nav ul');

menu.addEventListener('click',()=>{
    menulist.classList.toggle('showmenu')

})

/****************************************************************************************/

    

    