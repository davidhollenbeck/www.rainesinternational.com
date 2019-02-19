<?php
/**
 *
 * Template Name: Placements
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

add_action('genesis_before_loop', __NAMESPACE__ . '\load_placements_page', 1);
remove_action('genesis_loop', 'genesis_do_loop');

if ( is_user_logged_in() && get_field('placements_page_type') == 'ct' ) {
	add_action('genesis_after_header', __NAMESPACE__ . '\consultant_menu');
	add_filter( 'body_class', __NAMESPACE__ . '\ctrack_body_class' );
}

function load_placements_page() {
	hero( get_field('hero') );
	?>
    <div class="row row--padding row--default-page-content row--listings">
        <?php

	    if ( get_field('placements_page_type') == 'ct' ) {
		    listings( 0, false, 'placement', 'ct' );
	    }

	    else {
		    listings();
        }

        ?>
    </div>
	<?php
	intel_footer_cta();
}

wp_enqueue_script( 'ajax-listings',  CHILD_URL . '/assets/js/listings.js', array( 'jquery' ), '1.0', true );

genesis();