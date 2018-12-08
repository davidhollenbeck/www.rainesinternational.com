/**
 * Drawer
 */

( function ( document, $, undefined ) {

    $(document).ready(function(){
        $('#drawer-nav').css('display', 'block');

        $('#drawer-nav').multilevelpushmenu({
            container: $( '#drawer-nav' ),
            collapsed: true,
            fullCollapse: true,
            menuHeight: 240
        });

        $('.drawer-navigation__toggle').click( function() {
            if ( $(this).hasClass('hidden') ) {
                $('#drawer-nav').multilevelpushmenu('expand');
                $(this).removeClass('hidden');
                $(this).addClass('visible');
            }

            else {
                $('#drawer-nav').multilevelpushmenu('collapse');
                $(this).removeClass('visible');
                $(this).addClass('hidden');
            }
        });
    });

})( document, jQuery );