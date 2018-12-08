/**
 * Slider
 */

( function ( document, $, undefined ) {
    $(document).ready(function () {
        $('.slider').slick({
            arrows: false,
            slide: '.slide',
            infinite: false
        });

        $('.slider__navigation__button--next').click( function() {
            $('.slider').slick('slickNext');
        });

        $('.slider__navigation__button--prev').click( function() {
            $('.slider').slick('slickPrev');
        });
    });
})( document, jQuery );
