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

        $('.sidebar-slider').slick({
            arrows: false,
            slide: '.sidebar-slide',
            infinite: true
        });

        $('.slider__navigation__button--next').click( function() {
            $('.sidebar-slider').slick('slickNext');
        });

        $('.slider__navigation__button--prev').click( function() {
            $('.sidebar-slider').slick('slickPrev');
        });

    });
})( document, jQuery );
