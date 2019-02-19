/**
 * Profile
 */

( function ( document, $, undefined ) {

    $(document).ready(function(){

        $('#openUserDropdown').click( function( e ) {
            e.preventDefault();

            if ( $(this).hasClass('active') ) {
                $('#userMenuDropdown').slideUp();
                $(this).removeClass('active');
            }

            else {
                $('#userMenuDropdown').slideDown();
                $(this).addClass('active');
            }
        });
    });

})( document, jQuery );