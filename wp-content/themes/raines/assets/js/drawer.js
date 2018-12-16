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
            menuHeight: 240,

            onItemClick: function() {
                // First argument is original event object
                var event = arguments[0],
                    // Second argument is menu level object containing clicked item (<div> element)
                    $menuLevelHolder = arguments[1],
                    // Third argument is clicked item (<li> element)
                    $item = arguments[2],
                    // Fourth argument is instance settings/options object
                    options = arguments[3];

                // Anchor href
                var itemHref = $item.find( 'a:first' ).attr( 'href' );
                // Redirecting the page
                location.href = itemHref;
            }
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