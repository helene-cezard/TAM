const app = {

  itv: null,
  slides: document.querySelectorAll('.carousel__slide'),

  init: function() {
      console.log('App initialized');
      app.burgerMenu();
      app.movePosition();

      app.slides[0].classList.add('carousel-active');

      app.itv = app.play(app.itv);
      app.showSubmenu();
      app.animateCounters();
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
        console.log('Submenu button clicked');
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
    const slideActive = carousel.querySelector('.carousel-active');
    let newIndex = [...app.slides].indexOf(slideActive) + 1;

    if (newIndex >= [...app.slides].length) newIndex = 0;
    app.slides[newIndex].classList.add('carousel-active');

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

  animateCounters: function() {
    const numbers = document.querySelectorAll('.home__counter__number');

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const number = entry.target;
          const target = number.innerHTML;
          let count = 0;
          const increment = target / 70;

          function updateCounter() {
            count += increment;
            if (count < target) {
              number.textContent = Math.ceil(count);
              requestAnimationFrame(updateCounter);
            } else {
              number.textContent = target;
            }
          }

          updateCounter();
          observer.unobserve(entry.target);
        }
      });
    },
     { threshold: 0.3 });

      numbers.forEach(number => observer.observe(number));
  },

  movePosition: function() {
    const buttons = document.querySelectorAll('.position-button');

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        if (button.classList.contains('up')) {
            console.log('Up button clicked');

        }
        else if (button.classList.contains('down')) {
            console.log('Down button clicked');
        }
      });
    });
  }
}


document.addEventListener('DOMContentLoaded', app.init);
