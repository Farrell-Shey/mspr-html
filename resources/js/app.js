window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {
}





//Scroll Reveal
import ScrollReveal from 'scrollreveal';

let slideUp = {
    distance: '150%',
    origin: 'bottom',
    opacity: null
};

let item = {
    delay: 375,
    duration: 500,
    reset: true
};

ScrollReveal().reveal('.slide-up', slideUp);

ScrollReveal().reveal('.item', item);