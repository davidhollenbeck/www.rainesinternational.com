<?php
/**
 * Raines International
 *
 * This file adds the edit profile page to the Raines International Theme.
 *
 * Template Name: Edit Profile
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Raines;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_register_page', 1);

if ( is_user_logged_in() ) {
	add_action('genesis_after_header', __NAMESPACE__ . '\consultant_menu');
}

function load_register_page() {
	hero( get_field('hero') );
	?>
	<div class="row row--padding row--user-details">
        <div class="row--user-details__form">
			<?php
			if ( is_user_logged_in() ) {
				echo do_shortcode('[wppb-edit-profile form_name="edit-profile"]');
			}

			else {
				echo do_shortcode('[wppb-login] ');
			}

			?>
		</div>
	</div>
	<?php

}

genesis();