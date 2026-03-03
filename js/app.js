const app = {

  itv: null,

  init: function() {
      console.log('App initialized');
      app.burgerMenu();
      app.itv = app.play(app.itv);
      app.showSubmenu();
  },

  burgerMenu: function() {
    const header = document.querySelector(".header");

    icons.addEventListener("click", () => {
      header.classList.toggle("active");
      nav.classList.toggle("active");
      icons.classList.toggle("active");

      if (icons.classList.contains("active")) {
        app.pause(app.itv);
      }
      else {
        app.itv = app.play(app.itv);
      }
        
    });

    document.addEventListener('click', (e) => {
      if (!header.contains(e.target)) {
        header.classList.remove("active");
        nav.classList.remove("active");
        icons.classList.remove("active");
        app.itv = app.play(app.itv);
      }
    });
  },

  showSubmenu: function() {
    document.addEventListener('click', (e) => {
      if (e.target.classList.contains('submenu__text')) {
        const submenu = e.target.nextElementSibling;
        submenu.classList.toggle('active');
      }
    });
  },
    
  startCarousel: function() {
    const slides = document.querySelectorAll('.carousel__slide');

    const slideActive = document.querySelector('.active');
    let newIndex = [...slides].indexOf(slideActive) + 1;
    
    if (newIndex >= [...slides].length) newIndex = 0;
    slides[newIndex].classList.add('active');
    
    slideActive.classList.remove('active');
  },
    
  play: function(itv) {
    clearInterval(itv);
    itv = setInterval(app.startCarousel, 5000);
    return itv;
  },
  
  pause: function(itv) {
    clearInterval(itv);
  },
}


document.addEventListener('DOMContentLoaded', app.init);
