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

        app.initMessages();
        app.animateCounters();
        app.burgerMenu();
        app.openGallery();
        app.showSubmenu();
        app.showLightbox();
        app.initTabs();
        app.initResizableQuill();
        app.handleYTvideos();

        const pages = ['home', 'association', 'team', 'reports', 'benin', 'france', 'training', 'resources', 'contact', 'eulogy'];

        pages.forEach(element => {
            app.movePosition(element + 'Sections');
            app.updatePositions(element + 'Sections', 'section_reorder', currentRoute, element);
        });

        app.movePosition('reportsContainer');
        app.updatePositions('reportsContainer', 'reports_reorder', currentRoute, 'reports');

        app.movePosition('actionsContainer');
        app.updatePositions('actionsContainer', 'action_reorder', currentRoute, 'france');

        app.movePosition('carousel');
        app.updatePositions('carousel', 'carousel_reorder', currentRoute, 'home');

        app.movePosition('visuals');
        app.updatePositions('visuals', 'visual_reorder', currentRoute, 'resources');

        app.movePosition('galleryCategories');
        app.updatePositions('galleryCategories', 'categories_reorder', currentRoute, 'resources');
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

    openGallery: function() {
        // Sélectionne toutes les galeries
        const galleries = document.querySelectorAll(".resources__gallery");

        galleries.forEach((gallery) => {
          // Ajoute la classe "collapsed" par défaut
          gallery.classList.add("collapsed");

          // Crée le bouton "Étendre"
          const toggleButton = document.createElement("button");
          toggleButton.classList.add("resources__gallery__toggle");
          toggleButton.textContent = "Étendre";

          // Ajoute le bouton à la galerie
          gallery.appendChild(toggleButton);

          // Ajoute un gestionnaire d'événement pour le bouton
          toggleButton.addEventListener("click", () => {
            if (gallery.classList.contains("collapsed")) {
              gallery.classList.remove("collapsed");
              toggleButton.textContent = "Réduire";
            } else {
              gallery.classList.add("collapsed");
              toggleButton.textContent = "Étendre";
            }
          });
        });
    },

    showLightbox: function() {
        const lightbox = document.getElementById("lightbox");
        const lightboxImage = document.getElementById("lightbox-image");
        const closeButton = document.querySelector(".lightbox__close");

        document.querySelectorAll(".resources__image").forEach((image) => {

            image.addEventListener("click", () => {

                lightboxImage.src = image.dataset.src;
                lightboxImage.alt = image.alt;

                lightbox.classList.add("lightbox-active");
            });

        });

        closeButton.addEventListener("click", () => {
            lightbox.classList.remove("lightbox-active");
        });

        lightbox.addEventListener("click", (event) => {

            if (event.target === lightbox) {
                lightbox.classList.remove("lightbox-active");
            }

        });

        document.addEventListener("keydown", (event) => {

            if (event.key === "Escape") {
                lightbox.classList.remove("lightbox-active");
            }

        });
    },

    initTabs: function () {
        document.querySelectorAll('.tabs-form').forEach(container => {

            container.querySelectorAll('.tabs-form__tab-button').forEach(button => {

                button.addEventListener('click', () => {
                    this.openTab(container, button.dataset.tab);
                });

            });

        });
    },

    openTab: function(container, tab) {

        container.querySelectorAll('.tabs-form__tab-button').forEach(button => {
            button.classList.toggle(
                'tabs-form__tab-button--active',
                button.dataset.tab === tab
            );
        });

        container.querySelectorAll('.tabs-form__tab-content').forEach(content => {
            content.classList.toggle(
                'tabs-form__tab-content--active',
                content.dataset.tab === tab
            );
        });
    },

    movePosition: function (containerId) {
        const container = document.getElementById(containerId);

        const messages = {
            Sections: 'sections',
            reportsContainer: 'rapports',
            actionsContainer: 'actions',
            carousel: 'images',
            visuals: 'supports visuels',
            galleryCategories: 'catégories',
        };

        let messageElement = '';

        for (const [key, value] of Object.entries(messages)) {
            if (containerId.includes(key)) {
                messageElement = value;
                break;
            }
        }
        if (container === null) {
            return;
        }

        container.addEventListener('click', (event) => {
            const elementToMove = event.target.closest('.element-to-move');

            if (!elementToMove) {
                return;
            }

            const button = event.target.closest('.position-button');

            if (!button) {
                return;
            }

            if (button.classList.contains('upButton') || button.classList.contains('leftButton')) {

                const previous = elementToMove.previousElementSibling;

                if (previous) {
                    container.insertBefore(elementToMove, previous);
                    app.createMessage('error', 'Vous avez modifié l\'ordre des ' + messageElement + ', n\'oubliez pas d\'enregistrer pour valider les changements');
                }
            }

            if (button.classList.contains('downButton') || button.classList.contains('rightButton')) {

                const next = elementToMove.nextElementSibling;

                if (next) {
                    container.insertBefore(next, elementToMove);
                    app.createMessage('error', 'Vous avez modifié l\'ordre des ' + messageElement + ', n\'oubliez pas d\'enregistrer pour valider les changements');
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

        if(!reorderButton) {
            return;
        }


        reorderButton.addEventListener('click', function (event) {
            const ids = [...container.querySelectorAll('.element-to-move')]
            .map(subsection => subsection.dataset.id);

            if (event.target.parentNode.hasChildNodes(container)) {

                fetch(reorderRoute, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(ids)
                    })
                    .then(response => response.json())
                    .then(data => {
                        app.createMessage('success', data.success);
                        window.location.href = data.redirect;
                    });
            }
        });
    },

    createMessage: function (type, text) {
        const container = app.getMessagesContainer();

        const message = document.createElement('div');
        message.classList.add(`message__${type}`);
        message.textContent = text;

        container.appendChild(message);

        setTimeout(() => {
            message.remove();

            if (!container.hasChildNodes()) {
                container.remove();
            }
        }, 5000);
    },

    initMessages: function () {
        const messages = document.querySelectorAll('#messages-container > div');

        messages.forEach(message => {
            setTimeout(() => {
                message.remove();

                const container = document.getElementById('messages-container');
                if (!container.hasChildNodes()) {
                    container.remove();
                }
            }, 5000);
        });
    },

    getMessagesContainer: function () {
        let container = document.getElementById('messages-container');

        if (!container) {
            container = document.createElement('div');
            container.id = 'messages-container';
            document.body.appendChild(container);
        }

        return container;
    },

    initResizableQuill: function () {

        document.querySelectorAll('.quill-resizable').forEach(container => {

            const handle = container.querySelector('.quill-resizable__handle');
            const editor = container.querySelector('.ql-container');

            if (!handle || !editor) {
                return;
            }

            let startY;
            let startHeight;

            handle.addEventListener('mousedown', e => {

                e.preventDefault();

                startY = e.clientY;
                startHeight = editor.offsetHeight;

                function resize(e) {

                    const height = startHeight + (e.clientY - startY);

                    editor.style.height = Math.max(150, height) + 'px';

                }

                function stopResize() {

                    document.removeEventListener('mousemove', resize);
                    document.removeEventListener('mouseup', stopResize);

                }

                document.addEventListener('mousemove', resize);
                document.addEventListener('mouseup', stopResize);

            });

        });

    },

    handleYTvideos: function () {
        document.querySelectorAll('.youtube-placeholder__play').forEach(button => {
            button.addEventListener('click', () => {

                const placeholder = button.closest('.youtube-placeholder');

                const iframe = document.createElement('iframe');
                iframe.src = placeholder.dataset.src;
                iframe.title = 'YouTube video player';
                iframe.frameBorder = '0';
                iframe.allow =
                    'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
                iframe.referrerPolicy = 'strict-origin-when-cross-origin';
                iframe.allowFullscreen = true;

                placeholder.replaceWith(iframe);
            });
        });
    }
}

document.addEventListener('DOMContentLoaded', app.init);
// document.addEventListener('turbo:load', app.init);
