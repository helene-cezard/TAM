import './stimulus_bootstrap.js';

const app = {

    itv: null,
    slides: document.querySelectorAll('.carousel__slide'),
    pages: ['home', 'association', 'team', 'reports', 'benin', 'france', 'training', 'resources', 'contact'],

    init: function () {
        console.log('App initialized');

        const jsData = document.getElementById('js-data');
        const currentRoute = jsData.dataset.currentRoute;

        if (currentRoute === 'app_home') {
            app.slides[0].classList.add('carousel-active');
            app.itv = app.play(app.itv);
        }

        app.animateCounters();
        app.burgerMenu();
        app.showSubmenu();

        const pages = ['home', 'association', 'team', 'reports', 'benin', 'france', 'training', 'resources', 'contact'];

        pages.forEach(element => {
            app.movePosition(element + 'Sections');
            app.updatePositions(element + 'Sections', 'section_reorder', currentRoute, element);
        });

          app.movePosition('reportsContainer');
          app.updatePositions('reportsContainer', 'reports_reorder', currentRoute, 'reports');
    },

    burgerMenu: function () {
        const header = document.querySelector('.header');

        icons.addEventListener('click', () => {
            nav.classList.toggle('burger-active');
            icons.classList.toggle('burger-active');
            icons.ariaExpanded = icons.ariaExpanded !== 'true';

            if (icons.classList.contains('burger-active')) {
                app.pause(app.itv);
            } else {
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

    showSubmenu: function () {

        const buttons = document.querySelectorAll('.submenu__button');

        for (const button of buttons) {
            const submenu = button.nextElementSibling;

            button.addEventListener('click', () => {
                button.ariaExpanded = button.ariaExpanded !== 'true';


                submenu.classList.toggle('submenu-active');

                if (submenu.classList.contains('submenu-active')) {
                    app.pause(app.itv);
                } else {
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

    startCarousel: function () {
        const slideActive = carousel.querySelector('.carousel-active');
        let newIndex = [...app.slides].indexOf(slideActive) + 1;

        if (newIndex >= [...app.slides].length) newIndex = 0;
        app.slides[newIndex].classList.add('carousel-active');

        slideActive.classList.remove('carousel-active');
    },

    play: function (itv) {

        if (!document.querySelector('.carousel__slide')) return;
        clearInterval(itv);
        itv = setInterval(app.startCarousel, 5000);
        return itv;
    },

    pause: function (itv) {
        clearInterval(itv);
    },

    animateCounters: function () {
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
        }, {
            threshold: 0.3
        });

        numbers.forEach(number => observer.observe(number));
    },

    movePosition: function (containerId) {
        const container = document.getElementById(containerId);

        if (container === null) {
            return;
        }

        container.addEventListener('click', (event) => {

            const elementToMove = event.target.closest('.subsection-border');

            if (!elementToMove) {
                return;
            }

            if (event.target.classList.contains('up') || event.target.classList.contains('left')) {

                const previous = elementToMove.previousElementSibling;


                if (previous) {
                    container.insertBefore(elementToMove, previous);
                    app.createMessage('error', 'Vous avez modifié l\'ordre des sections, n\'oubliez pas d\'enregistrer pour valider les changements');
                }
            }

            if (event.target.classList.contains('down') || event.target.classList.contains('right')) {

                const next = elementToMove.nextElementSibling;


                if (next) {
                    container.insertBefore(next, elementToMove);
                    app.createMessage('error', 'Vous avez modifié l\'ordre des sections, n\'oubliez pas d\'enregistrer pour valider les changements');
                }
            }
        });
    },

    updatePositions: function (containerId, route, currentRoute, element) {
        const container = document.getElementById(containerId);

        if (container === null) {
            return;
        }

        if (!currentRoute.includes(element)) {
            return;
        }
        const reorderButton = document.getElementById(route);
        const reorderRoute = '/admin/' + element + '/' + route;

        console.log('reorderRoute : ' + reorderRoute);


        reorderButton.addEventListener('click', function (event) {
            const ids = [...container.querySelectorAll('.subsection-border')]
                .map(element => element.dataset.id);

            console.log('ids : ' + ids);

            if (event.target.parentNode === container) {

                fetch(reorderRoute, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(ids)
                    })
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data);
                        window.location.href = data.redirect;
                    });
            }
        });
    },

    createMessage: function (type, text) {
        const message = document.createElement('div');
        message.classList.add(`message__${type}`);
        message.textContent = text;

        document.body.insertBefore(message, document.body.lastChild);

        setTimeout(() => {
            message.remove();
        }, 5000);
    },
}


document.addEventListener('DOMContentLoaded', app.init);
