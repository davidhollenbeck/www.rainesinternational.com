/**
 * Pagination
 */

(function($) {

    var teamPage = 1;

    $(document).on( 'click', '#team_paginate', function( event ) {
        event.preventDefault();
        teamPage += 1;

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'team_pagination',
                query_vars: ajaxpagination.query_vars,
                page: teamPage
            },
            success: function( html ) {

                var item = $(html).hide();
                $(".recent-articles--team-member ul").append(item);
                item.fadeTo(300, 1);

            }
        })
    });

    var categoryPage = 1;

    $(document).on( 'click', '#category_paginate', function( event ) {

        event.preventDefault();

        categoryPage += 1;

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'category_pagination',
                query_vars: ajaxpagination.query_vars,
                page: categoryPage
            },
            success: function( html ) {

                var item = $(html).hide();
                $(".recent-articles--category ul").append(item);
                item.fadeTo(300, 1);


            }
        })
    });

    var placementsPage = 1;

    $(document).on( 'click', '#placements_paginate', function( event ) {

        event.preventDefault();

        var ctrack = 'all';

        if ( $('body').hasClass('ctrack') ) {
            ctrack = 'ct';
        }


        console.log(ctrack);

        placementsPage += 1;

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'placements_pagination',
                query_vars: ajaxpagination.query_vars,
                page: placementsPage,
                ctrack: ctrack
            },
            success: function( html ) {

                var item = $(html).hide();
                $("#listings").append(item);
                item.fadeTo(300, 1);
                console.log(item);

            }
        })
    });

    var opportunitiesPage = 1;

    $(document).on( 'click', '#opportunities_paginate', function( event ) {

        event.preventDefault();

        opportunitiesPage += 1;

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'opportunities_pagination',
                query_vars: ajaxpagination.query_vars,
                page: opportunitiesPage
            },
            success: function( html ) {

                var item = $(html).hide();
                $("#listings").append(item);
                item.fadeTo(300, 1);
            }
        })
    });

    var profilesPage = 1;

    $(document).on( 'click', '#profiles_paginate', function( event ) {

        event.preventDefault();

        profilesPage += 1;

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'profiles_pagination',
                query_vars: ajaxpagination.query_vars,
                page: profilesPage
            },
            success: function( html ) {

                var item = $(html).hide();
                $("#profiles").append(item);
                item.show();
            }
        })
    });

})(jQuery);