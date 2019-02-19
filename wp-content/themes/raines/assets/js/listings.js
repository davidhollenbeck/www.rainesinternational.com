/**
 * Placements
 */

( function ( document, $, undefined ) {

    $(document).ready(function(){

        $('#listings').on('click', '.view-listing-details', function( e ) {
            e.preventDefault();
            var placementId = $(this).attr('data-placement');
            var button = $(this);

            if ( $(this).hasClass('active') ) {

                $('#listing-content-' + placementId).css( 'opacity', '0').delay( 400 ).hide( 400, function() {
                    button.removeClass('active');
                } );

            }

            else {
                $(this).addClass('active');
                $('#listing-content-' + placementId).show( 400, function() {
                    $( this ).css('opacity', '100');
                });
            }

        });
    });

})( document, jQuery );