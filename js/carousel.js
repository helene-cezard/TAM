// const buttons = document.querySelectorAll('.carousel__btn');
const slides = document.querySelectorAll('.carousel__slide');

// buttons.forEach((button) => {
//   button.addEventListener('click', (e) => {
//     const calcNextSlide = e.target.id === 'next' ? 1 : -1;
//     const slideActive = document.querySelector('.active');

//     newIndex = calcNextSlide + [...slides].indexOf(slideActive);
    
//     if (newIndex < 0) newIndex = [...slides].length - 1;
//     if (newIndex >= [...slides].length) newIndex = 0;
//     slides[newIndex].classList.add('active');

//     slideActive.classList.remove('active');

//   });
// });

// Source - https://stackoverflow.com/a/62635245
// Posted by Leo
// Retrieved 2026-02-25, License - CC BY-SA 4.0

function start_carousel() {
  const slideActive = document.querySelector('.active');
  let newIndex = [...slides].indexOf(slideActive) + 1;
  
  if (newIndex >= [...slides].length) newIndex = 0;
  slides[newIndex].classList.add('active');
  
  slideActive.classList.remove('active');
}

let carousel = setTimeout(start_carousel, 5000);

function pause_carousel() {
  clearTimeout(carousel);
}