const app = {

  itv: null,

  init: function() {
      console.log('App initialized');
      app.burgerMenu();
      app.itv = app.play(app.itv);
      app.showSubmenu();
  },

  burgerMenu: function() {
    const header = document.querySelector('.header');

    icons.addEventListener('click', () => {
      nav.classList.toggle('burger-active');
      icons.classList.toggle('burger-active');
      icons.ariaExpanded = icons.ariaExpanded  !== 'true';

      if (icons.classList.contains('burger-active')) {
        app.pause(app.itv);
      }
      else {
        app.itv = app.play(app.itv);
      }

    });

    function closeMenu() {
      nav.classList.remove('burger-active');
      icons.classList.remove('burger-active');
      icons.ariaExpanded = 'false';
      app.itv = app.play(app.itv);
    }

    document.addEventListener('click', (e) => {
      if (!header.contains(e.target)) {
        closeMenu();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeMenu();
      }
    });
  },

  showSubmenu: function() {

    const buttons = document.querySelectorAll('.submenu__button');

    for (const button of buttons) {
      const submenu = button.nextElementSibling;

      button.addEventListener('click', () => {
        button.ariaExpanded = button.ariaExpanded !== 'true';


        submenu.classList.toggle('submenu-active');

        if (submenu.classList.contains('submenu-active')) {
          app.pause(app.itv);
        }
        else {
          app.itv = app.play(app.itv);
        }
      });

      function closeSubmenu() {
        button.ariaExpanded = 'false';
        submenu.classList.remove('submenu-active');
        app.itv = app.play(app.itv);
      }

      const liElement = button.parentNode;

      liElement.addEventListener('focusout', (e) => {
        const focusedInElement = e.relatedTarget;

        if (!liElement.contains(focusedInElement)) {
          closeSubmenu();
        }
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          closeSubmenu();
        }
      });

    }
  },

  startCarousel: function() {
    const slides = document.querySelectorAll('.carousel__slide');

    const slideActive = carousel.querySelector('.carousel-active');
    let newIndex = [...slides].indexOf(slideActive) + 1;

    if (newIndex >= [...slides].length) newIndex = 0;
    slides[newIndex].classList.add('carousel-active');

    slideActive.classList.remove('carousel-active');
  },

  play: function(itv) {

    if (!document.querySelector('.carousel__slide')) return;
    clearInterval(itv);
    itv = setInterval(app.startCarousel, 5000);
    return itv;
  },

  pause: function(itv) {
    clearInterval(itv);
  },
}


document.addEventListener('DOMContentLoaded', app.init);
