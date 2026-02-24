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

setInterval(() => {
  const slideActive = document.querySelector('.active');
  let newIndex = [...slides].indexOf(slideActive) + 1;

  if (newIndex >= [...slides].length) newIndex = 0;
  slides[newIndex].classList.add('active');

  slideActive.classList.remove('active');
}, 5000);